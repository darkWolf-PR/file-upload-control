<?php
declare(strict_types = 1);

namespace Nepada\FileUploadControl\Storage\Metadata;

use Nepada\FileUploadControl\Storage\FileUploadId;

interface MetadataJournal
{

    /**
     * List all record ids tracked by the journal.
     *
     * @return FileUploadId[]
     */
    public function list(): array;

    /**
     * @param FileUploadId $id
     * @return FileUploadMetadata
     * @throws FileUploadMetadataNotFoundException
     */
    public function load(FileUploadId $id): FileUploadMetadata;

    /**
     * @param FileUploadId $id
     * @param FileUploadMetadata $metadata
     * @throws FileUploadMetadataAlreadyExistsException
     */
    public function save(FileUploadId $id, FileUploadMetadata $metadata): void;

    public function delete(FileUploadId $id): void;

    /**
     * Completely delete the journal.
     */
    public function destroy(): void;

}
