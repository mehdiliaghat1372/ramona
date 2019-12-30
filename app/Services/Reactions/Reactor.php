<?php

namespace App\Services\Reactions;

use App\Models\Reaction;

interface Reactor
{
    /**
     * Set a reaction
     *
     * @param int $videoId
     * @param int $type
     * @param int $userId
     */
    public function set(int $videoId, int $type, int $userId): void;

    /**
     * Get a stored reaction
     *
     * @param int $videoId
     * @param int $userId
     * @return int|null
     */
    public function get(int $videoId, int $userId): ?int;

    /**
     * Count of reactions for given video
     *
     * @param int $videoId
     * @return int[][]
     */
    public function count(int $videoId): array;
}
