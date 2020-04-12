<?php
declare(strict_types = 1);

namespace Nepada\FileUploadControl\Storage;

interface Storage
{

    /**
     * @return FileUploadItem[]
     */
    public function list(): array;

    /**
     * @param FileUploadId $id
     * @return FileUploadItem
     * @throws FileUploadNotFoundException
     */
    public function load(FileUploadId $id): FileUploadItem;

    /**
     * @param FileUploadChunk $fileUploadChunk
     * @return FileUploadItem
     * @throws UnableToSaveFileUploadException
     */
    public function save(FileUploadChunk $fileUploadChunk): FileUploadItem;

    public function delete(FileUploadId $id): void;

    /**
     * Completely delete the storage.
     */
    public function destroy(): void;

}
