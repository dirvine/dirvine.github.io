<?php $title="MaidSafe Private"; ?>
<?php $metakeywords="MaidSafe Private"; ?>
<?php $metadescription="This library contains local data storage management and network managed data types, as well as the LifeStuff manager API."; ?>
<?php include('includes/header.php'); ?>
<body id="libraries">
<div id="container">
    <div id="main">
<?php include('includes/nav.php'); ?>
<div class="container-12">
    <div class="grid-9 main-content">
    <h1>MaidSafe-Private</h1>
<h2>MaidSafe Private Library</h2>


<h3>Description</h3>
<p id="u1949-4">This library contains local data storage management and  network managed data types. In addition this library includes the  lifestuff manager API. This is an installed application that is  responsible for checking for upgrades (in real time), installing and  testing upgrades as well as starting and restarting any vaults (on  failure or planned). The LifeStuff Manager manages private keys for  vaults and passes keys through a local TCP network. This is a one-way  mechanism and any vault compromised cannot read the keys of the local  disk.</p>
<p id="u1949-6">Prior to Open Sourcing, the library "Private" was  used internally to maintain patented code that could not be released to  the public (MaidSafe patents), so this library will potentially split  and create new repositories or be subsumed into existing repositories.</p>
<h3>Features</h3>
<ul>
  <li>Fundamental types managed in a central place (debatable feature)</li>
  <li>Separation of responsibility for private keys and vault processes</li>
</ul>
<h3>Programming languages</h3>
<h3>Core</h3>
<p>C++11 compatible with GCC (4.7 and above), Clang (3.3 and above) and  MSVC 2012 (with no dependency on CTP releases). Tested on Windows 32/64  bit, Linux 32/64 bit (dependent on GCC version) and OSX (Mountain Lion  and above).</p>
<h3>Status</h3>
<p>This library is considered <strong>BETA</strong> quality and  is provided with a test suite and QA suite. This can be considered for  use in production quality systems at this time.</p>

<h3>Roadmap</h3>
<ul>
  <li>Seperate the library from the LifeStuff Manager Application (new repository)</li>
  <li>Switch from TCP to secured IPC and remove IPC connection on vault start</li>
  <li>Allow upgrade manager component to start  sacrificial vault and monitor rank, only installing upgrade for all  vaults if the rank of the sacrificial vault stays on par with existing  vaults or improves. This allows the network to add a QA/test mechanism  to code upgrades and refuse those upgrades that do not measurably  improve the network</li>
</ul>
<h3>Links</h3>
<ul>
  <li><a href="https://github.com/maidsafe/MaidSafe-Private/wiki" target="_blank">Wiki, including build instructions</a></li>
  <li><a href="https://groups.google.com/forum/?fromgroups#%21forum/maidsafe-development" target="_blank">Developer mailing list</a></li>
  <li><a href="https://github.com/maidsafe/MaidSafe-Private/issues?state=open" target="_blank">Issue tracker</a></li>
  <li><a href="http://dash.maidsafe.net" target="_blank">Build Status</a></li>
</ul>
    </div>

<div class="grid-3 rightnav">
<div class="rightnav-box github">
<a href="https://github.com/maidsafe/MaidSafe-Private/wiki" target="_blank"><!-- content --><p>View on GitHub</p></a>
</div>
<div class="rightnav-box back">
<a href="maidsafe-network-platform-libraries"><p>Back to Libraries</p></a>
</div>
</div>
    
     
</div>

    </div>
    
</div>
  </div>  
</div>
<?php include('includes/footer.php'); ?>