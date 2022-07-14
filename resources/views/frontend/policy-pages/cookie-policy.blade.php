@extends("frontend.layouts.master")
@section('main-section')

    <div class="website__policies mb-5">
        <header class="p-100 bg-info text-center">
            <h1 class="text-white" style="font-size:50px">Cookie Policy</h1>
            <h3 class="text-white">We might place a small file known as a "cookie" on your <br>computer that will help us to collect information about how you browse the website.</h3>
        </header>
        <div class="container mt-5">
           <p>A cookie is a small file which asks permission to be placed on your computer's hard drive. Cookies allow web applications to respond to you as an individual, without storing any Personally Identifiable Information (PII).</p>
           <p>Overall, cookies help us provide you with a better website, by enabling us to monitor which pages you find useful and which you do not. A cookie in no way gives us access to your computer or any information about you, other than the data you choose to share with us.</p>
           <p>If you do not wish to use "cookies" you may disable this option in your Internet browser settings. These "cookies" can be removed from your computer at any time.</p>
           <p>You can find out more about how to manage cookies on the Information Commissioner's Office website.</p>
           <h2 class="text-info">Measuring website usage (Google Analytics)</h2>

           <p>We use Google Analytics to collect information about how you use GreenGuide.com. We do this to help make sure the website is meeting the needs of its users and to help us make improvements.</p>
           <p>To do this a unique identifier is created when you first visit our website and stored as a cookie so that as you visit other pages on the website, or if you leave and then return to the website, we identify the activity as belonging to the same user. This unique identifier does not directly provide us with any Personally Identifiable Information (such as your name or email address).</p>

           <ul>
               <li>Google's privacy policy</li>
               <li>Opt out of Google Analytics</li>
           </ul>
           <p>Google Analytics stores information about:</p>

           <ul>
               <li>the pages you visit on GreenGuide.co</li>
               <li>how long you spend on each GreenGuide.com page</li>
               <li>how you reached the website</li>
               <li>what you click on while you’re visiting the website.</li>
           </ul>
           <p>Based on the data we collect with Google Analytics we optimise our online strategy to help the website be discovered by more potential users and we make changes to the website to improve the experience for visitors.</p>
           <h4 class="text-info">Your unique identifier is held for 26 months.</h4>
           <p> If you don't wish to have your activity tracked whilst visiting the website you can disable cookies for the website in your browser.</p>
           <h4 class="text-info">Google Analytics sets the following cookies:</h4>
           <table class="table table-striped table-bordered table-hover">
               <thead>
                   <tr>
                       <th>
                        Name
                       </th>
                       <th>Purpose</th>
                       <th>Expires</th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td>_utma</td>
                       <td>Lets us know if you’ve visited before, so we can count how many of our visitors are new to GreenGuide.com or to a certain page.</td>
                       <td>2 years</td>
                   </tr>
                   <tr>
                       <td>_utmb</td>
                       <td>This works with _utmc to calculate the average length of time you spend on GreenGuide.com.</td>
                       <td>30 minutes</td>
                   </tr>
                   <tr>
                       <td>_utmc</td>
                       <td>This works with _utmb to calculate when you close your browser.</td>
                       <td>When you close your browser</td>
                   </tr>
                   <tr>
                       <td>_utmz</td>
                       <td>This tells us how you reached GreenGuide.com (for example from another website or a search engine)</td>
                       {{-- <td>2 years</td> --}}
                   </tr>
               </tbody>
           </table>
        </div>
    </div>
@endsection
