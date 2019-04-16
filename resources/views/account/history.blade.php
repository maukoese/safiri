@extends('layouts.app')

@section('content')
    <div class="theme-page-section theme-page-section-gray theme-page-section-lg">
      <div class="container">
        <div class="row">
        <div class="col-md-2-5 ">
          <div class="theme-account-sidebar">
            <div class="theme-account-avatar">
              <img class="theme-account-avatar-img" src="{{asset('img/70x70.png')}}" alt="Image Alternative text" title="Image Title"/>
              <p class="theme-account-avatar-name">Welcome,
                <br/>{{Auth::user()->name}}
              </p>
            </div>
            <nav class="theme-account-nav">
              <ul class="theme-account-nav-list">
                <li>
                  <a href="{{url('account')}}">
                    <i class="fa fa-cog"></i>Preferences
                  </a>
                </li>
                <li>
                  <a href="{{url('account/notifications')}}">
                    <i class="fa fa-bell"></i>Notifications
                  </a>
                </li>
                <li>
                  <a href="{{url('account/cards')}}">
                    <i class="fa fa-credit-card"></i>Payment Methods
                  </a>
                </li>
                <li>
                  <a href="{{url('account/travelers')}}">
                    <i class="fa fa-user-circle-o"></i>Travelers
                  </a>
                </li>
                <li class="active">
                  <a href="{{url('account/history')}}">
                    <i class="fa fa-history"></i>History
                  </a>
                </li>
                <li>
                  <a href="{{url('account/bookmarks')}}">
                    <i class="fa fa-bookmark"></i>Bookmarks
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
          <div class="col-md-9-5 ">
            <h1 class="theme-account-page-title">Booking History</h1>
            <div class="theme-account-history">
              <table class="table">
                <thead>
                  <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="theme-account-history-type">
                      <i class="fa fa-home theme-account-history-type-icon"></i>
                    </td>
                    <td>
                      <p class="theme-account-history-type-title">Jolie petit studio Paris 11</p>
                      <a class="theme-account-history-item-name" href="#">Vacation rental</a>
                    </td>
                    <td>
                      <a href="#">Paris, France</a>
                    </td>
                    <td class="theme-account-history-tr-date">
                      <p class="theme-account-history-date">Sep 23, 2017 &#8212; Sep 25, 2017</p>
                    </td>
                    <td>
                      <p class="theme-account-history-item-price">$319.26</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="theme-account-history-type">
                      <i class="fa fa-plane theme-account-history-type-icon"></i>
                    </td>
                    <td>
                      <p class="theme-account-history-type-title">London &rarr; New York</p>
                      <a class="theme-account-history-item-name" href="#">Round trip flight</a>
                    </td>
                    <td>
                      <a href="#"></a>
                    </td>
                    <td class="theme-account-history-tr-date">
                      <p class="theme-account-history-date">Sep 20, 2017 &#8212; Sep 27, 2017</p>
                    </td>
                    <td>
                      <p class="theme-account-history-item-price">$236.46</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="theme-account-history-type">
                      <i class="fa fa-bed theme-account-history-type-icon"></i>
                    </td>
                    <td>
                      <p class="theme-account-history-type-title">Refinery Hotel</p>
                      <a class="theme-account-history-item-name" href="#">Hotel room</a>
                    </td>
                    <td>
                      <a href="#">New York, USA</a>
                    </td>
                    <td class="theme-account-history-tr-date">
                      <p class="theme-account-history-date">Aug 16, 2017 &#8212; Aug 17, 2017</p>
                    </td>
                    <td>
                      <p class="theme-account-history-item-price">$476.63</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="theme-account-history-type">
                      <i class="fa fa-car theme-account-history-type-icon"></i>
                    </td>
                    <td>
                      <p class="theme-account-history-type-title">Chevrolet Cruze</p>
                      <a class="theme-account-history-item-name" href="#">Rental car</a>
                    </td>
                    <td>
                      <a href="#">New York, USA</a>
                    </td>
                    <td class="theme-account-history-tr-date">
                      <p class="theme-account-history-date">Aug 16, 2017 &#8212; Aug 19, 2017</p>
                    </td>
                    <td>
                      <p class="theme-account-history-item-price">$400.60</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="theme-account-history-type">
                      <i class="fa fa-glass theme-account-history-type-icon"></i>
                    </td>
                    <td>
                      <p class="theme-account-history-type-title">See London By Night Bus Tour</p>
                      <a class="theme-account-history-item-name" href="#">Experience</a>
                    </td>
                    <td>
                      <a href="#">London, United Kindom</a>
                    </td>
                    <td class="theme-account-history-tr-date">
                      <p class="theme-account-history-date">Aug 13, 2017</p>
                    </td>
                    <td>
                      <p class="theme-account-history-item-price">$206.23</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="theme-account-history-type">
                      <i class="fa fa-home theme-account-history-type-icon"></i>
                    </td>
                    <td>
                      <p class="theme-account-history-type-title">Jolie petit studio Paris 11</p>
                      <a class="theme-account-history-item-name" href="#">Vacation rental</a>
                    </td>
                    <td>
                      <a href="#">Paris, France</a>
                    </td>
                    <td class="theme-account-history-tr-date">
                      <p class="theme-account-history-date">Jul 9, 2017 &#8212; Jul 11, 2017</p>
                    </td>
                    <td>
                      <p class="theme-account-history-item-price">$268.52</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="theme-account-history-type">
                      <i class="fa fa-plane theme-account-history-type-icon"></i>
                    </td>
                    <td>
                      <p class="theme-account-history-type-title">London &rarr; New York</p>
                      <a class="theme-account-history-item-name" href="#">Round trip flight</a>
                    </td>
                    <td>
                      <a href="#"></a>
                    </td>
                    <td class="theme-account-history-tr-date">
                      <p class="theme-account-history-date">Jul 8, 2017 &#8212; Jul 13, 2017</p>
                    </td>
                    <td>
                      <p class="theme-account-history-item-price">$443.56</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="theme-account-history-type">
                      <i class="fa fa-bed theme-account-history-type-icon"></i>
                    </td>
                    <td>
                      <p class="theme-account-history-type-title">Refinery Hotel</p>
                      <a class="theme-account-history-item-name" href="#">Hotel room</a>
                    </td>
                    <td>
                      <a href="#">New York, USA</a>
                    </td>
                    <td class="theme-account-history-tr-date">
                      <p class="theme-account-history-date">Jul 3, 2017 &#8212; Jul 7, 2017</p>
                    </td>
                    <td>
                      <p class="theme-account-history-item-price">$282.73</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="theme-account-history-type">
                      <i class="fa fa-car theme-account-history-type-icon"></i>
                    </td>
                    <td>
                      <p class="theme-account-history-type-title">Chevrolet Cruze</p>
                      <a class="theme-account-history-item-name" href="#">Rental car</a>
                    </td>
                    <td>
                      <a href="#">New York, USA</a>
                    </td>
                    <td class="theme-account-history-tr-date">
                      <p class="theme-account-history-date">Jul 2, 2017 &#8212; Jul 11, 2017</p>
                    </td>
                    <td>
                      <p class="theme-account-history-item-price">$453.41</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="theme-account-history-type">
                      <i class="fa fa-glass theme-account-history-type-icon"></i>
                    </td>
                    <td>
                      <p class="theme-account-history-type-title">See London By Night Bus Tour</p>
                      <a class="theme-account-history-item-name" href="#">Experience</a>
                    </td>
                    <td>
                      <a href="#">London, United Kindom</a>
                    </td>
                    <td class="theme-account-history-tr-date">
                      <p class="theme-account-history-date">Jun 15, 2017</p>
                    </td>
                    <td>
                      <p class="theme-account-history-item-price">$373.71</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
