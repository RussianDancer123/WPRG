<?php
class NoweAuto{
    protected string $modelAuta;
    protected float $price;
    protected float $exchangeRate;

    public function ObliczCene(): float{
        if(isset($this->price) && isset($this->exchangeRate)){
            return $this->price*$this->exchangeRate;
        }else{
            return -1;
        }
    }

    public function getModelAuta(): string
    {
        return $this->modelAuta;
    }

    public function setModelAuta(string $modelAuta): void
    {
        $this->modelAuta = $modelAuta;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getExchangeRate(): float
    {
        return $this->exchangeRate;
    }

    public function setExchangeRate(float $exchangeRate): void
    {
        $this->exchangeRate = $exchangeRate;
    }


}
?>