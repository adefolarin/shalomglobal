<div class="container mt-3">
        <h4 class="text-center" style="margin-top: -50px;">Welcome <strong>{{ Auth::guard('sponsor')->user()->sponsors_name }}</</h2>
        <br><br><br><br>
        <ul class="nav nav-tabs nav-justified">
            <li class="nav-item">
                <a class="nav-link active" href="/sponsor">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/sponsorupdate">Update Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/sponsorresource">Resources</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/sponsorreport">Reports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/sponsorpayment">Transactions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout">Logout</a>
            </li>
        </ul><br>
 </div>