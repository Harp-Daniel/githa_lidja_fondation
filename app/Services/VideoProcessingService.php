<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use ProtoneMedia\LaravelFFMpeg\Exporters\HLSExporter;

class VideoProcessingService
{
    /**
     * Traite une vidéo uploadée : compression et découpage si nécessaire
     */
    public function processVideo($videoFile, $maxDuration = 60, $maxSizeMB = 50)
    {
        $originalPath = $videoFile->getRealPath();
        $originalName = $videoFile->getClientOriginalName();
        $fileSizeMB = $videoFile->getSize() / 1024 / 1024;

        // Vérifier la durée de la vidéo
        $duration = $this->getVideoDuration($originalPath);

        // Si la vidéo est trop longue, la couper
        if ($duration > $maxDuration) {
            $processedPath = $this->trimVideo($originalPath, $maxDuration);
        } else {
            $processedPath = $originalPath;
        }

        // Si la vidéo est trop lourde, la compresser
        if ($fileSizeMB > $maxSizeMB) {
            $processedPath = $this->compressVideo($processedPath);
        }

        // Générer un nom de fichier unique
        $filename = time() . '_' . preg_replace('/[^A-Za-z0-9\-_.]/', '', $originalName);
        $finalPath = 'projects/videos/' . $filename;

        // Stocker la vidéo traitée
        Storage::disk('public')->put($finalPath, file_get_contents($processedPath));

        // Nettoyer les fichiers temporaires
        if ($processedPath !== $originalPath) {
            unlink($processedPath);
        }

        return $finalPath;
    }

    /**
     * Obtient la durée d'une vidéo en secondes
     */
    private function getVideoDuration($videoPath)
    {
        $ffprobe = FFMpeg::ffprobe();
        $duration = $ffprobe
            ->format($videoPath)
            ->get('duration');

        return (float) $duration;
    }

    /**
     * Coupe une vidéo à la durée spécifiée
     */
    private function trimVideo($videoPath, $maxDuration)
    {
        $tempPath = tempnam(sys_get_temp_dir(), 'video_trim_') . '.mp4';

        FFMpeg::fromDisk('')
            ->open($videoPath)
            ->export()
            ->toDisk('')
            ->inFormat(new \FFMpeg\Format\Video\X264())
            ->setVideoCodec('libx264')
            ->setAudioCodec('aac')
            ->setAdditionalParameters(['-t', $maxDuration])
            ->save($tempPath);

        return $tempPath;
    }

    /**
     * Compresse une vidéo pour réduire sa taille
     */
    private function compressVideo($videoPath)
    {
        $tempPath = tempnam(sys_get_temp_dir(), 'video_compress_') . '.mp4';

        FFMpeg::fromDisk('')
            ->open($videoPath)
            ->export()
            ->toDisk('')
            ->inFormat(new \FFMpeg\Format\Video\X264())
            ->setVideoCodec('libx264')
            ->setAudioCodec('aac')
            ->setKiloBitrate(1000) // Réduire le bitrate
            ->setAdditionalParameters([
                '-vf', 'scale=1280:720', // Redimensionner à 720p
                '-preset', 'fast',
                '-crf', '28' // Qualité légèrement réduite
            ])
            ->save($tempPath);

        return $tempPath;
    }

    /**
     * Génère une miniature de la vidéo
     */
    public function generateThumbnail($videoPath, $atSecond = 1)
    {
        $thumbnailPath = str_replace('.mp4', '_thumb.jpg', $videoPath);
        $fullVideoPath = Storage::disk('public')->path($videoPath);
        $fullThumbnailPath = Storage::disk('public')->path($thumbnailPath);

        FFMpeg::fromDisk('public')
            ->open($videoPath)
            ->getFrameFromSeconds($atSecond)
            ->export()
            ->toDisk('public')
            ->save($thumbnailPath);

        return $thumbnailPath;
    }
}
