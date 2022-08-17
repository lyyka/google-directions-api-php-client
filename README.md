# Google Directions API - PHP Client
Implement Google Directions API as a PHP library to be used easily in any project

## To-do
- [ ] Implement DirectionsLeg
- [ ] Implement DirectionsRoute
- [ ] Implement DirectionsStep
- [ ] Implement DirectionsResponse
- [ ] Implement API call
- [ ] GoogleDirectionsApi parameters validation - compare to the params defined in docs
- [ ] Document all implemented resources, as well as the ones not implemented (implementation tbd)
- [ ] Test
- [ ] Document testing notes
- [ ] Push to packagist

## Usage
Main class is `GoogleDirectionsApi`. Methods provided:
1. `from(Location $location)` - origin point definition
2. `to(Location $location)` - destination point definition
3. `params(array $params)` - define any additional parameters besides origin/destination. Origin/destination from above setters will have advantage over the ones defined as regular parameters here.
4. `get()` - returns `DirectionsResponse` resource

`Location` is an interface representing various types of location strings Google accepts in the query. Possible options:
1. `PlaceIdLocation (string placeId)` (recommended by Google for efficiency)
2. `AddressLocation (string address)`
3. `LatLngLocation (number lat, number lng)`

## Available resources
Resource definitions follow Directions API documentation and will just access different array keys that are nested in the response body received.

## Testing 
Package uses PHPUnit for testing.
```shell
./vendor/bin/phpunit
```
