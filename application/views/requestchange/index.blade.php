@layout('base.default')

@section('mainbody')
  <div class="row">
    <div class="small-12 large-12 columns">
      <h2>Request for Change of Desk Space</h2>
      <hr/>
    </div>
  </div>

  <div class="row">
    <div class="small-12 large-12 columns">
      <ul class="accordion" data-accordion>
        <?php $j= 1; ?>
        @foreach($cluster_bookings as $cluster_id => $bookings)
          @if (!empty($bookings))
        
            <li class="accordion-navigation">
              <a href="#panel{{ $j }}a"><h4>{{ Cluster::find($cluster_id)->name }}</h4></a>
              <div id="panel{{ $j }}a" class="content active">
                <?php $j++?>
                <div class="row">
                  <div class="small-12 large-12 columns">
                    <table> 
	              <thead>
	                <tr>
	                  <th>#</th>
	                  <th>Name</th>
                          <th class="text-center">Pillar</th>
	                  <th class="text-center">Category</th>
	                  <th class="text-center">Booking From</th>
	                  <th class="text-center">Booking Till</th>
	                  <th class="text-center">Nationality</th>
	                  <th class="text-center">Seat</th>
	                </tr>
	              </thead>
                      
	              <tbody>
	                <?php $i = 1; ?>
	                @foreach($bookings as $booking)
   	                  <tr>
                            <td>{{ $i++ }}</td>
	                    <td>{{ HTML::link_to_route('new_change', e(ucwords($booking->first_name)).e(" ".ucwords($booking->last_name)) , array($booking->id)) }}</td>
	                    <td class="text-center">{{ e(strtoupper($booking->pillar)) }}</td>
	                    <td class="text-center">{{ e(ucwords($booking->category)) }}</td>
                            <td class="text-center">{{ date_format(date_create(e($booking->booking_from)),'Y-m-d') }}</td>
                            <td class="text-center">{{ date_format(date_create(e($booking->booking_till)),'Y-m-d') }}</td>
	                    <td class="text-center">{{ e($booking->nationality) }}
                            <td class="text-center">{{ e(ClusterSeat::find($booking->seat_id)->number) }}</td>
	                  </tr>
	                @endforeach
	              </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </li>
          @endif
        @endforeach
      </ul>
    </div>
  </div>


<script>
  $(document).ready(function(){
      $(document).foundation();
  });
</script>
@endsection

