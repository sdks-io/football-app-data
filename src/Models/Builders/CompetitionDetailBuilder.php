<?php

declare(strict_types=1);

/*
 * SoccerV3ScoresLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SoccerV3ScoresLib\Models\Builders;

use Core\Utils\CoreHelper;
use SoccerV3ScoresLib\Models\CompetitionDetail;
use SoccerV3ScoresLib\Models\Season;

/**
 * Builder for model CompetitionDetail
 *
 * @see CompetitionDetail
 */
class CompetitionDetailBuilder
{
    /**
     * @var CompetitionDetail
     */
    private $instance;

    private function __construct(CompetitionDetail $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new competition detail Builder object.
     */
    public static function init(): self
    {
        return new self(new CompetitionDetail());
    }

    /**
     * Sets current season field.
     */
    public function currentSeason(?Season $value): self
    {
        $this->instance->setCurrentSeason($value);
        return $this;
    }

    /**
     * Sets teams field.
     */
    public function teams(?array $value): self
    {
        $this->instance->setTeams($value);
        return $this;
    }

    /**
     * Sets games field.
     */
    public function games(?array $value): self
    {
        $this->instance->setGames($value);
        return $this;
    }

    /**
     * Sets competition id field.
     */
    public function competitionId(?int $value): self
    {
        $this->instance->setCompetitionId($value);
        return $this;
    }

    /**
     * Sets area id field.
     */
    public function areaId(?int $value): self
    {
        $this->instance->setAreaId($value);
        return $this;
    }

    /**
     * Sets area name field.
     */
    public function areaName(?string $value): self
    {
        $this->instance->setAreaName($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets gender field.
     */
    public function gender(?string $value): self
    {
        $this->instance->setGender($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets format field.
     */
    public function format(?string $value): self
    {
        $this->instance->setFormat($value);
        return $this;
    }

    /**
     * Sets seasons field.
     */
    public function seasons(?array $value): self
    {
        $this->instance->setSeasons($value);
        return $this;
    }

    /**
     * Sets key field.
     */
    public function key(?string $value): self
    {
        $this->instance->setKey($value);
        return $this;
    }

    /**
     * Initializes a new competition detail object.
     */
    public function build(): CompetitionDetail
    {
        return CoreHelper::clone($this->instance);
    }
}