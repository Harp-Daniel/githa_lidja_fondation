<?php

return [

    /*
     * Here you can override the path to the executable
     * of the binary. This is usually not necessary.
     */
    'ffmpeg' => [
        'binaries' => env('FFMPEG_BINARIES', 'ffmpeg'),
        'threads'  => 12,   // set to null for unlimited threads
    ],

    /*
     * Here you can override the path to the executable
     * of the binary. This is usually not necessary.
     */
    'ffprobe' => [
        'binaries' => env('FFPROBE_BINARIES', 'ffprobe'),
    ],

    /*
     * Here you can override the timeout for the ffmpeg command.
     * This is usually not necessary.
     */
    'timeout' => 0,

    /*
     * Here you can specify the temporary directory for ffmpeg.
     * This is usually not necessary.
     */
    'temporary_files_root' => env('FFMPEG_TEMPORARY_FILES_ROOT', sys_get_temp_dir()),

    /*
     * Here you can specify the log channel for ffmpeg.
     * This is usually not necessary.
     */
    'log_channel' => env('LOG_CHANNEL', 'single'),

];
