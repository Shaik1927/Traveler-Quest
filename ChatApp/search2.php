<?php


if (isset($_GET['searchbar'])) {
    $searchQuery = strtolower($_GET['searchbar']);

    switch ($searchQuery) {
        case "hills":
            case "Hills":
            header("Location: hills.php");
            exit();
        case "forests":
        case "Forests":
            header("Location: Forests.php");
            exit();
        case "desert":
        case "Desert":
            header("Location: Desert.php");
            exit();
        case "canyons":
        case "Canyons":
            header("Location: Canyons.php");
            exit();
        case "moraine":
        case "Moraine":
            header("Location: Moraine.php");
            exit();
        case "Swamps":
        case "swamps":
            header("Location: Swamps.php");
            exit();
        case "terrains":
        case "Terrains":
            header("Location: Terrains.php");
            exit();
        case "Land-Adventures":
        case "land-adventures":
        case "land":
        case "Land":
            header("Location: Land-Adventures.php");
            exit();
        case "Water-Adventures":
        case "water-adventures":
        case "Water":
        case "water":
            header("Location: Water-Adventures.php");
            exit();
        case "Air-Advantures":
        case "air-advantures":
        case "Air":
        case "air":
            header("Location: Air-advantures.php");
            exit();
        case "mountains":
        case "Mountains":
            header("Location: mountains.php");
            exit();
        case "seas":
        case "Seas":
            header("Location: Seas.php");
            exit();
        case "rivers":
        case "Rivers":
            header("Location: Rivers.php");
            exit();
        case "ponds":
        case "Ponds":
            header("Location: Ponds.php");
            exit();
        case "amusement parks":
        case "Amusement parks":
            header("Location: Amusement parks.php");
            exit();
        case "trekking":
        case "Trekking":
            header("Location: Trekking.php");
            exit();
        case "paragliding":
        case "Paragliding":
            header("Location: Paragliding.php");
            exit();
        case "scuba diving":
        case "Scuba diving":
        case "Scuba Diving":
        case "scuba":
            header("Location: Scuba diving.php");
            exit();
        case "bunjee jumping":
        case "Bunjee Jumping":
            case "Bunjee jumping":
                case "bunjee Jumping":
            header("Location: bunjee jumping.php");
            exit();
        case "bike trip":
        case "Bike trip":
            header("Location: Biketrip.php");
            exit();
        case "safari":
        case "Safari":
            header("Location: Safari.php");
            exit();
        case "river rafting":
        case "River Rafting":
            header("Location: River Rafting.php");
            exit();
        case "helicopter ride":
        case "Helicopter Ride":
            header("Location: helicopter ride.php");
            exit();
        case "water parks":
        case "Water Parks":
            header("Location: Water Parks.php");
            exit();
        case "parasailing":
            case "Parasailing":
            header("Location: Parasailing.php");
            exit();
        case "surfing":
        case "Surfing":
            header("Location: Surfing.php");
            exit();
        case "wakeboarding":
        case "Wakeboarding":
            header("Location: Wakeboarding.php");
            exit();
        case "hot air balloon":
        case "Hot Air balloon":
        case "Hot Air Balloon":
            header("Location: Hot Air Balloon.php");
            exit();
        case "rock climbing":
        case "Rock Climbing":
            header("Location: Rock Climbing.php");
            exit();
        case "horse riding":
        case "Horse Riding":
            header("Location: Horse riding.php");
            exit();
        case "paramotoring":
        case "Paramotoring":
            header("Location: Paramotoring.php");
            exit();
        case "camping":
        case "Camping":
            header("Location: Camping.php");
            exit();
        case "boating":
        case "Boating":
            header("Location: Boating.php");
            exit();
        case "paintball":
        case "Paintball":
            case "paint ball":
                case "Paint Ball":
            header("Location: paintball.php");
            exit();
        case "gokarting":
        case "Gokarting":
            case "go karting":
                case "Go karting":
            header("Location: gokarting.php");
            exit();
        case "kayaking":
        case "Kayaking":
            header("Location: Kayaking.php");
            exit();
        case "Sand Biking":
        case "sand biking":
        case "Sand biking":
        case "sand Biking":
            header("Location: Sand Biking.php");
            exit();
        case "Sandboarding":
        case "sandboarding":
            header("Location: Sandboarding.php");
            exit();
        case "Stargazing":
        case "stargazing":
            header("Location: stargazing.php");
            exit();
        case "Survival":
        case "survival":
            header("Location: Survival.php");
            exit();
        case "Skydiving":
        case "skydiving":
            header("Location: skydiving.php");
            exit();
        case "Hiking":
        case "hiking":
            header("Location: Hiking.php");
            exit();
        case "Mountain Biking":
        case "Mountain biking":
        case "mountain Biking":
        case "mountain biking":
            header("Location: Mountain Biking.php");
            exit();
        case "Mountain Carting":
        case "mountain carting":
        case "mountain Carting":
        case "Mountain carting":
            header("Location: Mountain Carting.php");
            exit();
        case "Mud Biking":
        case "mud biking":
        case "Mud biking":
        case "mud Biking":
            header("Location: Mud Biking.php");
            exit();
        case "Mud Carting":
        case "Mud carting":
        case "mud Carting":
        case "mud carting":
            header("Location: Mud Carting.php");
            exit();
        case "Glacial Exploring":
        case "glacial exploring":
        case "Glacial":
        case "Glacier":
            case "glacial":
                case "glacier":
            header("Location: Glacial.php");
            exit();
        case "Glass Bridge":
        case "glass Bridge":
        case "Glass bridge":
        case "glass bridge":
            header("Location: Glass Bridge.php");
            exit();
        case "zip lining":
        case "Zip Lining":
        case "Zip lining":
        case "zip Lining":
            header("Location: Zip-Lining.php");
            exit();
        case "Fishing":
        case "fishing":
            header("Location: Fishing.php");
            exit();
        case "Camel Ride":
        case "camel ride":
        case "camel Ride":
        case "Camel ride":
            header("Location: Camel Ride.php");
            exit();
        case "rope cycling":
        case "Rope cycling":
        case "rope Cycling":
        case "Rope Cycling":
            header("Location: Rope Cycling.php");
            exit();
        case "play parks":
        case "Play parks":
        case "Play Parks":
        case "play Parks":
            header("Location: Play parks.php");
            exit();
    
        default:
            // Redirect to a default page if the search query is not found
            header("Location: search.php");
            exit();
    }
} else {
    // Handle the case where no search query is provided
    // If you want to display a search form here, you can include it
    // or redirect to a search page.
    header("Location: index.php");
    exit();
}
?>
