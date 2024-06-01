<?php
class Ubezpieczenie extends AutoZDodatkami
{
    protected float $wartoscUbezpieczenia;
    protected int $iloscLat;

    public function ObliczCene(): float{
        if(isset($this->wartoscUbezpieczenia) && isset($this->iloscLat)) {
            return $this->getWartoscUbezpieczenia() * (parent::ObliczCene() * ((100 - $this->getIloscLat()) / 100));
        }else{
            return -1;
        }
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