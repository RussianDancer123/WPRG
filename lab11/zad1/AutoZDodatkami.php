<?php
class AutoZDodatkami extends NoweAuto
{
    protected float $alarm, $radio, $klimatyzacja;

    public function ObliczCene(): float{
        if(isset($this->alarm) && isset($this->radio) && isset($this->klimatyzacja)){
            return parent::ObliczCene() + (($this->alarm + $this->radio + $this->klimatyzacja) * $this->exchangeRate);
        }else{
            return -1;
        }
    }

    public function getAlarm(): float
    {
        return $this->alarm;
    }

    public function setAlarm(float $alarm): void
    {
        $this->alarm = $alarm;
    }

    public function getRadio(): float
    {
        return $this->radio;
    }

    public function setRadio(float $radio): void
    {
        $this->radio = $radio;
    }

    public function getKlimatyzacja(): float
    {
        return $this->klimatyzacja;
    }

    public function setKlimatyzacja(float $klimatyzacja): void
    {
        $this->klimatyzacja = $klimatyzacja;
    }

}
?>