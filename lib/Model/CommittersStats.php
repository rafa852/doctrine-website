<?php

declare(strict_types=1);

namespace Doctrine\Website\Model;

final class CommittersStats implements CommitterStats
{
    /** @var int */
    private $numCommits = 0;

    /** @var int */
    private $numAdditions = 0;

    /** @var int */
    private $numDeletions = 0;

    /** @param CommitterStats[] $committersStats */
    public function __construct(array $committersStats)
    {
        foreach ($committersStats as $committerStats) {
            $this->numCommits   += $committerStats->getNumCommits();
            $this->numAdditions += $committerStats->getNumAdditions();
            $this->numDeletions += $committerStats->getNumDeletions();
        }
    }

    public function getNumCommits(): int
    {
        return $this->numCommits;
    }

    public function getNumAdditions(): int
    {
        return $this->numAdditions;
    }

    public function getNumDeletions(): int
    {
        return $this->numDeletions;
    }
}
