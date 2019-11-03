<?php
require_once 'Vehicule.php';
class Bicycle extends Vehicule
{
    const ALLOWED_ENERGIES = ['manual','electric'];
    /**
     * @var string
     */
    private $energy;
    /**
     * @var int
     */
    private $energyLevel;
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy)
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return this;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}