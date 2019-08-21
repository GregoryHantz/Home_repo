<?php
fwrite(STDOUT, "Enter number of room: ");
$numberOfRoom = trim(fgets(STDIN));
fwrite(STDOUT, "Enter number of floors: ");
$number_of_floors = trim(fgets(STDIN));
fwrite(STDOUT, "Enter the number of apartments per floor: ");
$number_of_rooms_in_floor = trim(fgets(STDIN));

function getFloor($numberOfRoom, $number_of_floors, $number_of_rooms_in_floor)
{
    $number_of_padik = 1;
    $number_of_floor = 1;
    $number_of_rooms_in_padik = $number_of_rooms_in_floor * $number_of_floors;
    while ($numberOfRoom > $number_of_rooms_in_padik) {
        $numberOfRoom -= $number_of_rooms_in_padik;
        $number_of_padik++;
    }
    $number_of_padik++;
    while ($numberOfRoom > $number_of_rooms_in_floor) {
        $numberOfRoom -= $number_of_rooms_in_floor;
        $number_of_floor++;
    }
    echo 'Room number ' . $numberOfRoom . ' located in ' . $number_of_padik . ' the entrance, on ' . $number_of_floor . ' floor.';
}

getFloor($numberOfRoom, $number_of_floors, $number_of_rooms_in_floor);

