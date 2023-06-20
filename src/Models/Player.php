<?php

declare(strict_types=1);

/*
 * SoccerV3ScoresLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SoccerV3ScoresLib\Models;

use stdClass;

class Player implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $playerId;

    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $lastName;

    /**
     * @var string|null
     */
    private $commonName;

    /**
     * @var string|null
     */
    private $shortName;

    /**
     * @var string|null
     */
    private $position;

    /**
     * @var string|null
     */
    private $positionCategory;

    /**
     * @var int|null
     */
    private $jersey;

    /**
     * @var string|null
     */
    private $foot;

    /**
     * @var int|null
     */
    private $height;

    /**
     * @var int|null
     */
    private $weight;

    /**
     * @var string|null
     */
    private $gender;

    /**
     * @var string|null
     */
    private $birthDate;

    /**
     * @var string|null
     */
    private $birthCity;

    /**
     * @var string|null
     */
    private $birthCountry;

    /**
     * @var string|null
     */
    private $nationality;

    /**
     * @var string|null
     */
    private $injuryStatus;

    /**
     * @var string|null
     */
    private $injuryBodyPart;

    /**
     * @var string|null
     */
    private $injuryNotes;

    /**
     * @var string|null
     */
    private $injuryStartDate;

    /**
     * @var string|null
     */
    private $updated;

    /**
     * @var string|null
     */
    private $photoUrl;

    /**
     * @var int|null
     */
    private $rotoWirePlayerID;

    /**
     * @var string|null
     */
    private $draftKingsPosition;

    /**
     * @var int|null
     */
    private $usaTodayPlayerID;

    /**
     * @var string|null
     */
    private $usaTodayHeadshotUrl;

    /**
     * @var string|null
     */
    private $usaTodayHeadshotNoBackgroundUrl;

    /**
     * @var string|null
     */
    private $usaTodayHeadshotUpdated;

    /**
     * @var string|null
     */
    private $usaTodayHeadshotNoBackgroundUpdated;

    /**
     * Returns Player Id.
     */
    public function getPlayerId(): ?int
    {
        return $this->playerId;
    }

    /**
     * Sets Player Id.
     *
     * @maps PlayerId
     */
    public function setPlayerId(?int $playerId): void
    {
        $this->playerId = $playerId;
    }

    /**
     * Returns First Name.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     *
     * @maps FirstName
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     *
     * @maps LastName
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Common Name.
     */
    public function getCommonName(): ?string
    {
        return $this->commonName;
    }

    /**
     * Sets Common Name.
     *
     * @maps CommonName
     */
    public function setCommonName(?string $commonName): void
    {
        $this->commonName = $commonName;
    }

    /**
     * Returns Short Name.
     */
    public function getShortName(): ?string
    {
        return $this->shortName;
    }

    /**
     * Sets Short Name.
     *
     * @maps ShortName
     */
    public function setShortName(?string $shortName): void
    {
        $this->shortName = $shortName;
    }

    /**
     * Returns Position.
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * Sets Position.
     *
     * @maps Position
     */
    public function setPosition(?string $position): void
    {
        $this->position = $position;
    }

    /**
     * Returns Position Category.
     */
    public function getPositionCategory(): ?string
    {
        return $this->positionCategory;
    }

    /**
     * Sets Position Category.
     *
     * @maps PositionCategory
     */
    public function setPositionCategory(?string $positionCategory): void
    {
        $this->positionCategory = $positionCategory;
    }

    /**
     * Returns Jersey.
     */
    public function getJersey(): ?int
    {
        return $this->jersey;
    }

    /**
     * Sets Jersey.
     *
     * @maps Jersey
     */
    public function setJersey(?int $jersey): void
    {
        $this->jersey = $jersey;
    }

    /**
     * Returns Foot.
     */
    public function getFoot(): ?string
    {
        return $this->foot;
    }

    /**
     * Sets Foot.
     *
     * @maps Foot
     */
    public function setFoot(?string $foot): void
    {
        $this->foot = $foot;
    }

    /**
     * Returns Height.
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * Sets Height.
     *
     * @maps Height
     */
    public function setHeight(?int $height): void
    {
        $this->height = $height;
    }

    /**
     * Returns Weight.
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }

    /**
     * Sets Weight.
     *
     * @maps Weight
     */
    public function setWeight(?int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * Returns Gender.
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * Sets Gender.
     *
     * @maps Gender
     */
    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * Returns Birth Date.
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    /**
     * Sets Birth Date.
     *
     * @maps BirthDate
     */
    public function setBirthDate(?string $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * Returns Birth City.
     */
    public function getBirthCity(): ?string
    {
        return $this->birthCity;
    }

    /**
     * Sets Birth City.
     *
     * @maps BirthCity
     */
    public function setBirthCity(?string $birthCity): void
    {
        $this->birthCity = $birthCity;
    }

    /**
     * Returns Birth Country.
     */
    public function getBirthCountry(): ?string
    {
        return $this->birthCountry;
    }

    /**
     * Sets Birth Country.
     *
     * @maps BirthCountry
     */
    public function setBirthCountry(?string $birthCountry): void
    {
        $this->birthCountry = $birthCountry;
    }

    /**
     * Returns Nationality.
     */
    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    /**
     * Sets Nationality.
     *
     * @maps Nationality
     */
    public function setNationality(?string $nationality): void
    {
        $this->nationality = $nationality;
    }

    /**
     * Returns Injury Status.
     */
    public function getInjuryStatus(): ?string
    {
        return $this->injuryStatus;
    }

    /**
     * Sets Injury Status.
     *
     * @maps InjuryStatus
     */
    public function setInjuryStatus(?string $injuryStatus): void
    {
        $this->injuryStatus = $injuryStatus;
    }

    /**
     * Returns Injury Body Part.
     */
    public function getInjuryBodyPart(): ?string
    {
        return $this->injuryBodyPart;
    }

    /**
     * Sets Injury Body Part.
     *
     * @maps InjuryBodyPart
     */
    public function setInjuryBodyPart(?string $injuryBodyPart): void
    {
        $this->injuryBodyPart = $injuryBodyPart;
    }

    /**
     * Returns Injury Notes.
     */
    public function getInjuryNotes(): ?string
    {
        return $this->injuryNotes;
    }

    /**
     * Sets Injury Notes.
     *
     * @maps InjuryNotes
     */
    public function setInjuryNotes(?string $injuryNotes): void
    {
        $this->injuryNotes = $injuryNotes;
    }

    /**
     * Returns Injury Start Date.
     */
    public function getInjuryStartDate(): ?string
    {
        return $this->injuryStartDate;
    }

    /**
     * Sets Injury Start Date.
     *
     * @maps InjuryStartDate
     */
    public function setInjuryStartDate(?string $injuryStartDate): void
    {
        $this->injuryStartDate = $injuryStartDate;
    }

    /**
     * Returns Updated.
     */
    public function getUpdated(): ?string
    {
        return $this->updated;
    }

    /**
     * Sets Updated.
     *
     * @maps Updated
     */
    public function setUpdated(?string $updated): void
    {
        $this->updated = $updated;
    }

    /**
     * Returns Photo Url.
     */
    public function getPhotoUrl(): ?string
    {
        return $this->photoUrl;
    }

    /**
     * Sets Photo Url.
     *
     * @maps PhotoUrl
     */
    public function setPhotoUrl(?string $photoUrl): void
    {
        $this->photoUrl = $photoUrl;
    }

    /**
     * Returns Roto Wire Player ID.
     */
    public function getRotoWirePlayerID(): ?int
    {
        return $this->rotoWirePlayerID;
    }

    /**
     * Sets Roto Wire Player ID.
     *
     * @maps RotoWirePlayerID
     */
    public function setRotoWirePlayerID(?int $rotoWirePlayerID): void
    {
        $this->rotoWirePlayerID = $rotoWirePlayerID;
    }

    /**
     * Returns Draft Kings Position.
     */
    public function getDraftKingsPosition(): ?string
    {
        return $this->draftKingsPosition;
    }

    /**
     * Sets Draft Kings Position.
     *
     * @maps DraftKingsPosition
     */
    public function setDraftKingsPosition(?string $draftKingsPosition): void
    {
        $this->draftKingsPosition = $draftKingsPosition;
    }

    /**
     * Returns Usa Today Player ID.
     */
    public function getUsaTodayPlayerID(): ?int
    {
        return $this->usaTodayPlayerID;
    }

    /**
     * Sets Usa Today Player ID.
     *
     * @maps UsaTodayPlayerID
     */
    public function setUsaTodayPlayerID(?int $usaTodayPlayerID): void
    {
        $this->usaTodayPlayerID = $usaTodayPlayerID;
    }

    /**
     * Returns Usa Today Headshot Url.
     */
    public function getUsaTodayHeadshotUrl(): ?string
    {
        return $this->usaTodayHeadshotUrl;
    }

    /**
     * Sets Usa Today Headshot Url.
     *
     * @maps UsaTodayHeadshotUrl
     */
    public function setUsaTodayHeadshotUrl(?string $usaTodayHeadshotUrl): void
    {
        $this->usaTodayHeadshotUrl = $usaTodayHeadshotUrl;
    }

    /**
     * Returns Usa Today Headshot No Background Url.
     */
    public function getUsaTodayHeadshotNoBackgroundUrl(): ?string
    {
        return $this->usaTodayHeadshotNoBackgroundUrl;
    }

    /**
     * Sets Usa Today Headshot No Background Url.
     *
     * @maps UsaTodayHeadshotNoBackgroundUrl
     */
    public function setUsaTodayHeadshotNoBackgroundUrl(?string $usaTodayHeadshotNoBackgroundUrl): void
    {
        $this->usaTodayHeadshotNoBackgroundUrl = $usaTodayHeadshotNoBackgroundUrl;
    }

    /**
     * Returns Usa Today Headshot Updated.
     */
    public function getUsaTodayHeadshotUpdated(): ?string
    {
        return $this->usaTodayHeadshotUpdated;
    }

    /**
     * Sets Usa Today Headshot Updated.
     *
     * @maps UsaTodayHeadshotUpdated
     */
    public function setUsaTodayHeadshotUpdated(?string $usaTodayHeadshotUpdated): void
    {
        $this->usaTodayHeadshotUpdated = $usaTodayHeadshotUpdated;
    }

    /**
     * Returns Usa Today Headshot No Background Updated.
     */
    public function getUsaTodayHeadshotNoBackgroundUpdated(): ?string
    {
        return $this->usaTodayHeadshotNoBackgroundUpdated;
    }

    /**
     * Sets Usa Today Headshot No Background Updated.
     *
     * @maps UsaTodayHeadshotNoBackgroundUpdated
     */
    public function setUsaTodayHeadshotNoBackgroundUpdated(?string $usaTodayHeadshotNoBackgroundUpdated): void
    {
        $this->usaTodayHeadshotNoBackgroundUpdated = $usaTodayHeadshotNoBackgroundUpdated;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->playerId)) {
            $json['PlayerId']                            = $this->playerId;
        }
        if (isset($this->firstName)) {
            $json['FirstName']                           = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['LastName']                            = $this->lastName;
        }
        if (isset($this->commonName)) {
            $json['CommonName']                          = $this->commonName;
        }
        if (isset($this->shortName)) {
            $json['ShortName']                           = $this->shortName;
        }
        if (isset($this->position)) {
            $json['Position']                            = $this->position;
        }
        if (isset($this->positionCategory)) {
            $json['PositionCategory']                    = $this->positionCategory;
        }
        if (isset($this->jersey)) {
            $json['Jersey']                              = $this->jersey;
        }
        if (isset($this->foot)) {
            $json['Foot']                                = $this->foot;
        }
        if (isset($this->height)) {
            $json['Height']                              = $this->height;
        }
        if (isset($this->weight)) {
            $json['Weight']                              = $this->weight;
        }
        if (isset($this->gender)) {
            $json['Gender']                              = $this->gender;
        }
        if (isset($this->birthDate)) {
            $json['BirthDate']                           = $this->birthDate;
        }
        if (isset($this->birthCity)) {
            $json['BirthCity']                           = $this->birthCity;
        }
        if (isset($this->birthCountry)) {
            $json['BirthCountry']                        = $this->birthCountry;
        }
        if (isset($this->nationality)) {
            $json['Nationality']                         = $this->nationality;
        }
        if (isset($this->injuryStatus)) {
            $json['InjuryStatus']                        = $this->injuryStatus;
        }
        if (isset($this->injuryBodyPart)) {
            $json['InjuryBodyPart']                      = $this->injuryBodyPart;
        }
        if (isset($this->injuryNotes)) {
            $json['InjuryNotes']                         = $this->injuryNotes;
        }
        if (isset($this->injuryStartDate)) {
            $json['InjuryStartDate']                     = $this->injuryStartDate;
        }
        if (isset($this->updated)) {
            $json['Updated']                             = $this->updated;
        }
        if (isset($this->photoUrl)) {
            $json['PhotoUrl']                            = $this->photoUrl;
        }
        if (isset($this->rotoWirePlayerID)) {
            $json['RotoWirePlayerID']                    = $this->rotoWirePlayerID;
        }
        if (isset($this->draftKingsPosition)) {
            $json['DraftKingsPosition']                  = $this->draftKingsPosition;
        }
        if (isset($this->usaTodayPlayerID)) {
            $json['UsaTodayPlayerID']                    = $this->usaTodayPlayerID;
        }
        if (isset($this->usaTodayHeadshotUrl)) {
            $json['UsaTodayHeadshotUrl']                 = $this->usaTodayHeadshotUrl;
        }
        if (isset($this->usaTodayHeadshotNoBackgroundUrl)) {
            $json['UsaTodayHeadshotNoBackgroundUrl']     = $this->usaTodayHeadshotNoBackgroundUrl;
        }
        if (isset($this->usaTodayHeadshotUpdated)) {
            $json['UsaTodayHeadshotUpdated']             = $this->usaTodayHeadshotUpdated;
        }
        if (isset($this->usaTodayHeadshotNoBackgroundUpdated)) {
            $json['UsaTodayHeadshotNoBackgroundUpdated'] = $this->usaTodayHeadshotNoBackgroundUpdated;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}