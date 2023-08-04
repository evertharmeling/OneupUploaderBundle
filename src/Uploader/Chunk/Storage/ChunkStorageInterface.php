<?php

declare(strict_types=1);

namespace Oneup\UploaderBundle\Uploader\Chunk\Storage;

use Symfony\Component\HttpFoundation\File\UploadedFile;

interface ChunkStorageInterface
{
    public function clear(int $maxAge): void;

<<<<<<< HEAD
    public function addChunk(string $uuid, int $index, UploadedFile $chunk, string $original): mixed;

    public function assembleChunks(mixed $chunks, bool $removeChunk, bool $renameChunk): mixed;

    public function cleanup(string $path): void;

    public function getChunks(string $uuid): mixed;
=======
    public function addChunk(string $uuid, int $index, UploadedFile $chunk, string $original);

    public function assembleChunks($chunks, bool $removeChunk, bool $renameChunk);

    public function cleanup(string $path): void;

    public function getChunks(string $uuid);
>>>>>>> 2b60727 (Updated php_cs_fixer to v4)
}
