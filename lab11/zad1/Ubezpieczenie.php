<?php
class Ubezpieczenie extends AutoZDodatkami
{
    protected float $wartoscUbezpieczenia;
    protected int $iloscLat;

    public function ObliczCene(): float{
        return $this->getWartoscUbezpieczenia() * (parent::ObliczCene() * ((100-$this->getIloscLat())/100));
    }

    public function getWartoscUbezpieczenia(): float
    {
        return $this->wartoscUbezpieczenia;
    }

    public function setWartoscUbezpieczenia(float $wartoscUbezpieczenia): void
    {
        $this->wartoscUbezpieczenia = $wartoscUbezpieczenia;
    }

    public function getIloscLat(): int
    {
        return $this->iloscLat;
    }

    public function setIloscLat(int $iloscLat): void
    {
        $this->iloscLat = $iloscLat;
    }
}
?>