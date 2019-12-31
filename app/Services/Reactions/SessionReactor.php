<?php

namespace App\Services\Reactions;

use App\Models\Reaction;

class SessionReactor implements Reactor
{
    /**
     * @inheritDoc
     */
    public function get(int $videoId, int $userId): ?int
    {
        if ($r = Reaction::find(session($this->key($videoId)))) {
            return $r->type;
        }

        return null;
    }

    /**
     * @inheritDoc
     */
    public function set(int $videoId, int $type, int $userId): void
    {
        $id = session($this->key($videoId));

        if (empty($reaction = Reaction::find($id))) {
            $reaction = new Reaction();
        }

        $reaction->user_id = $userId;
        $reaction->type = $type;
        $reaction->video_id = $videoId;
        $reaction->meta = json_encode([
            'session' => session()->getId(),
            'agent' => request()->userAgent(),
            'ip' => request()->ip(),
        ]);
        $reaction->save();

        session()->put($this->key($videoId), $reaction->id);
    }

    /**
     * Generate session key
     *
     * @param int $videoId
     * @return string
     */
    private function key(int $videoId): string
    {
        return join(':', ['reaction', $videoId]);
    }

    /**
     * @inheritDoc
     */
    public function count(int $videoId): array
    {
        $reactions = [];
        foreach (Reaction::whereVideoId($videoId)->get() as $r) {
            isset($reactions[$r->type]) ? $reactions[$r->type]++ : $reactions[$r->type] = 1;
        }

        return $reactions;
    }
}
