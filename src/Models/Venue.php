<?php

declare(strict_types=1);

/*
 * SoccerV3ScoresLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SoccerV3ScoresLib\Models;

use stdClass;

class Venue implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $venueId;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $address;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $zip;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var bool|null
     */
    private $open;

    /**
     * @var int|null
     */
    private $opened;

    /**
     * @var string|null
     */
    private $nickname1;

    /**
     * @var string|null
     */
    private $nickname2;

    /**
     * @var int|null
     */
    private $capacity;

    /**
     * @var string|null
     */
    private $surface;

    /**
     * @var float|null
     */
    private $geoLat;

    /**
     * @var float|null
     */
    private $geoLong;

    /**
     * Returns Venue Id.
     */
    public function getVenueId(): ?int
    {
        return $this->venueId;
    }

    /**
     * Sets Venue Id.
     *
     * @maps VenueId
     */
    public function setVenueId(?int $venueId): void
    {
        $this->venueId = $venueId;
    }

    /**
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps Name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Address.
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * Sets Address.
     *
     * @maps Address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns City.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets City.
     *
     * @maps City
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Zip.
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * Sets Zip.
     *
     * @maps Zip
     */
    public function setZip(?string $zip): void
    {
        $this->zip = $zip;
    }

    /**
     * Returns Country.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     *
     * @maps Country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Open.
     */
    public function getOpen(): ?bool
    {
        return $this->open;
    }

    /**
     * Sets Open.
     *
     * @maps Open
     */
    public function setOpen(?bool $open): void
    {
        $this->open = $open;
    }

    /**
     * Returns Opened.
     */
    public function getOpened(): ?int
    {
        return $this->opened;
    }

    /**
     * Sets Opened.
     *
     * @maps Opened
     */
    public function setOpened(?int $opened): void
    {
        $this->opened = $opened;
    }

    /**
     * Returns Nickname 1.
     */
    public function getNickname1(): ?string
    {
        return $this->nickname1;
    }

    /**
     * Sets Nickname 1.
     *
     * @maps Nickname1
     */
    public function setNickname1(?string $nickname1): void
    {
        $this->nickname1 = $nickname1;
    }

    /**
     * Returns Nickname 2.
     */
    public function getNickname2(): ?string
    {
        return $this->nickname2;
    }

    /**
     * Sets Nickname 2.
     *
     * @maps Nickname2
     */
    public function setNickname2(?string $nickname2): void
    {
        $this->nickname2 = $nickname2;
    }

    /**
     * Returns Capacity.
     */
    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    /**
     * Sets Capacity.
     *
     * @maps Capacity
     */
    public function setCapacity(?int $capacity): void
    {
        $this->capacity = $capacity;
    }

    /**
     * Returns Surface.
     */
    public function getSurface(): ?string
    {
        return $this->surface;
    }

    /**
     * Sets Surface.
     *
     * @maps Surface
     */
    public function setSurface(?string $surface): void
    {
        $this->surface = $surface;
    }

    /**
     * Returns Geo Lat.
     */
    public function getGeoLat(): ?float
    {
        return $this->geoLat;
    }

    /**
     * Sets Geo Lat.
     *
     * @maps GeoLat
     */
    public function setGeoLat(?float $geoLat): void
    {
        $this->geoLat = $geoLat;
    }

    /**
     * Returns Geo Long.
     */
    public function getGeoLong(): ?float
    {
        return $this->geoLong;
    }

    /**
     * Sets Geo Long.
     *
     * @maps GeoLong
     */
    public function setGeoLong(?float $geoLong): void
    {
        $this->geoLong = $geoLong;
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
        if (isset($this->venueId)) {
            $json['VenueId']   = $this->venueId;
        }
        if (isset($this->name)) {
            $json['Name']      = $this->name;
        }
        if (isset($this->address)) {
            $json['Address']   = $this->address;
        }
        if (isset($this->city)) {
            $json['City']      = $this->city;
        }
        if (isset($this->zip)) {
            $json['Zip']       = $this->zip;
        }
        if (isset($this->country)) {
            $json['Country']   = $this->country;
        }
        if (isset($this->open)) {
            $json['Open']      = $this->open;
        }
        if (isset($this->opened)) {
            $json['Opened']    = $this->opened;
        }
        if (isset($this->nickname1)) {
            $json['Nickname1'] = $this->nickname1;
        }
        if (isset($this->nickname2)) {
            $json['Nickname2'] = $this->nickname2;
        }
        if (isset($this->capacity)) {
            $json['Capacity']  = $this->capacity;
        }
        if (isset($this->surface)) {
            $json['Surface']   = $this->surface;
        }
        if (isset($this->geoLat)) {
            $json['GeoLat']    = $this->geoLat;
        }
        if (isset($this->geoLong)) {
            $json['GeoLong']   = $this->geoLong;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}