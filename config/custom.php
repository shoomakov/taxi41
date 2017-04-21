<?php

return [
  'secondary_phone' => env('SECONDARY_PHONE'),
  'city' => file_get_contents('resources/views/md/city.md'),
  'mailto' => env('MAIL_TO_ADDRESS'),
  'location' => env('LOCATION')
];
