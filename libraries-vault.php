<?php $title="Distributed Data Store, MaidSafe Vault"; ?>
<?php $metakeywords="Distributed Data Store, MaidSafe Vault"; ?>
<?php $metadescription="A self healing, fully distributed data store that allows an exciting array of applications to be built."; ?>
<?php include('includes/header.php'); ?>
<body id="libraries">
<div id="container">
    <div id="main">
<?php include('includes/nav.php'); ?>
<div class="container-12">
    <div class="grid-9 main-content">
    <h1>MaidSafe-Vault</h1>
<h2>Vault Component of the MaidSafe Network</h2>


<h3>Description</h3>
<p id="u1863-12">This library provides a RESTful-like API for clients to connect to a  MaidSafe network. Client interactivity with the network will create the  appropriate policies to be passed to the policy-based class design  environment. This library can be considered a helper library to connect  clients such as <a href="http://www.maidsafe.net/libraries-lifestuff.html">LifeStuff</a> to distributed networks such as the MaidSafe Platform.</p>
<h3>Features</h3>
<ul>
  <li>Distributed structured data</li>
  <li>Distributed unstructured data</li>
  <li>Automatic fail-over and self healing</li>
  <li>Consistent data integrity checking and repairing</li>
  <li>Node Identification guaranteed via PKI provided by <a href="http://www.maidsafe.net/libraries-passport.html">MaidSafe-Passport</a></li>
  <li>Fully encrypted data store (key value)</li>
  <li>Public data store</li>
  <li>Shared data handling</li>
  <li>Data versioning and merge resolution (mostly automatic)</li>
  <li>Built to run in hostile environments (including public Internet)</li>
  <li>No servers required at all (no DNS, time servers etc.)</li>
</ul>
<h3>Programming languages</h3>
<h3>Core</h3>
<p>C++11 compatible with GCC (4.7 and above), Clang (3.3 and above) and  MSVC 2012 (with no dependency on CTP releases). Tested on Windows 32/64  bit, Linux 32/64 bit (dependent on GCC version) and OSX (Mountain Lion  and above).</p>
<h3>Status</h3>
<p>This library is considered <span id="u1915-54"><strong>PRE&#45;ALPHA</strong></span>&nbsp;quality and is provided with a full test suite and QA suite. This should not be considered for use in production quality systems at this time. There is currently a limit on message size that requires attention at the earliest convenience.</p>

<h3>Roadmap</h3>
<ul>
  <li>Improve ranking system to recognise further improper behaviour</li>
  <li>Improve type safety of network messages</li>
  <li>Measure fully distributed local data stores for account handling</li>
  <li>Provide further API enhancements to allow client merge policies and structured data object handling</li>
</ul>
<h3>Links</h3>
<ul>
  <li><a href="https://github.com/maidsafe/MaidSafe-Vault/wiki" target="_blank">Wiki, including build instructions</a></li>
  <li><a href="https://groups.google.com/forum/?fromgroups#%21forum/maidsafe-development" target="_blank">Developer mailing list</a></li>
  <li><a href="https://github.com/maidsafe/MaidSafe-Vault/issues?state=open" target="_blank">Issue tracker</a></li>
  <li><a href="http://dash.maidsafe.net" target="_blank">Build Status</a></li>
</ul>
    </div>

<div class="grid-3 rightnav">
<div class="rightnav-box github">
<a href="https://github.com/maidsafe/MaidSafe-Vault/wiki" target="_blank"><!-- content --><p>View on GitHub</p></a>
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