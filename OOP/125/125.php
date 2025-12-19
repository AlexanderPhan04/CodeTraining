<!-- OOP - câu lệnh protected -->
<?php
    class motorbike
    {
        protected $vehicleType;
    }
    
    class honda extends motorbike
    {
        // có thể dùng protected như này pro
        function info()
        {
            echo $this->vehicleType = "cheap motorbike";
        }
    }

    $yelow = new honda();
    $yelow->info();
?>