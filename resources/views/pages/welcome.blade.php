   @extends('layouts.app')
   @section('title' , 'Home page ')

   @section('content')
	    <section class="callaction">
      <h2 style="text-align: center; color: purple;" class="heading">Welcome to <strong>Vote Me</strong></h2>
      <h3 style="text-align: center;">Make polls in just a few clicks!</h3>
      <h4 style="text-align: center;">It is easy, fun and simple!</h4>
        <!-- Portfolio Projects -->
        <div class="row">
          <div class="span12">
            <h4 class="heading">Latest 10 <strong>polls</strong></h4>
            <div class="row">
              <section id="projects">
 
 <section id="content">
      <div class="container">
        <!-- Default table -->
        <div class="row">
          <div class="span12">
            
              @if(count($latest_polls ) > 0 )
            <table class="table">
              <thead>
                <tr>
                  <th>
                    #
                  </th>
                  <th>
                    Title
                  </th>
                  <th >
                    User
                  </th>                  
                  <th >
                    Created
                  </th>
                  
                </tr>
              </thead>
              <tbody>
                  @foreach($latest_polls as $latest_poll )

                <tr>
                  <td>
                    {{ $latest_poll -> id  }}
                  </td>
                  <td>
                    <a href="/show-poll/{{ $latest_poll -> id  }}">{{ $latest_poll -> title  }}</a>
                  </td>
                  <td>
                    {{ optional(  $latest_poll ->  user )-> name }}
                  </td>
                  <td>
                   {{ $latest_poll -> created_at -> diffForhumans() }}
                  </td>
                </tr>
@endforeach
              </tbody>
            </table>



            @else
<p>

There are currently no active polls.</p>
<a href="{{ route('SubmitPoll') }}" class="btn btn-success">Create poll</a>


            @endif
          </div>


        </div>



      </div>
    </section>


              </section>
            </div>
          </div>
        </div>
        <!-- End Portfolio Projects -->
        <!-- divider -->




        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
       
    </section>
    <section id="bottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div id="twitter-wrapper">
                <div id="twitter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection