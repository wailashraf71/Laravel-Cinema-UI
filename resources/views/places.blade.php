@extends('layouts.app')

@section('content')


    <div id="map"></div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-dark">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Name: blah blah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    30Km distance
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(
                document.getElementById('map'),
                {center: new google.maps.LatLng(-33.91722, 151.23064), zoom: 16});

            var iconBase =
                '{{ asset('/images') }}/';

            var icons = {
                pin: {
                    icon: iconBase + 'pin.png'
                },
                tower: {
                    icon: iconBase + 'tower.png'
                }
            };

            var features = [
                {
                    position: new google.maps.LatLng(-33.91721, 151.22630),
                    type: 'pin'
                }, {
                    position: new google.maps.LatLng(-33.91539, 151.22820),
                    type: 'tower'
                }, {
                    position: new google.maps.LatLng(-33.91747, 151.22912),
                    type: 'tower'
                }, {
                    position: new google.maps.LatLng(-33.91910, 151.22907),
                    type: 'tower'
                }
            ];

            // Create markers.
            for (var i = 0; i < features.length; i++) {
                var marker = new google.maps.Marker({
                    position: features[i].position,
                    icon: icons[features[i].type].icon,
                    map: map,

                });
                google.maps.event.addListener(marker, 'click', function () {
                        $("#exampleModal").modal('show');
                });
            }
        }
    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvMfG_zcVRh47PnmyrlYoGsfTOU45YkiU&callback=initMap">
    </script>
@endsection
