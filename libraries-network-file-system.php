<?php $title="Network File System, MaidSafe Network File System"; ?>
<?php $metakeywords="Network File System, MaidSafe Network File System"; ?>
<?php $metadescription="This library provides a RESTful–like API for clients to connect to a MaidSafe network."; ?>
<?php include('includes/header.php'); ?>
<body id="libraries">
<div id="container">
    <div id="main">
<?php include('includes/nav.php'); ?>
<div class="container-12">
    <div class="grid-9 main-content">
    <h1>MaidSafe-Network-Filesystem</h1>
<h2>Treats the MaidSafe network as a filesystem.<br>
  Exposes a pseudo RESTful interface (GET PUT POST DELETE)</h2>


<h3>Description</h3>
<p id="u1863-12">This library provides a RESTful-like API for clients to connect to a  MaidSafe network. Client interactivity with the network will create the  appropriate policies to be passed to the policy-based class design  environment. This library can be considered a helper library to connect  clients such as <a href="http://www.maidsafe.net/libraries-lifestuff.html">LifeStuff</a> to distributed networks such as the MaidSafe Platform.</p>
<h3>Features</h3>
<ul>
  <li>Separation of responsibilities between client applications and network requests.</li>
  <li>Serialisation and parsing of network messages.</li>
</ul>
<h3>Programming languages</h3>
<h3>Core</h3>
<p>C++11 compatible with GCC (4.7 and above), Clang (3.3 and above) and  MSVC 2012 (with no dependency on CTP releases). Tested on Windows 32/64  bit, Linux 32/64 bit (dependent on GCC version) and OSX (Mountain Lion  and above).</p>
<h3>Status</h3>
<p>This library is considered <strong>PRE-ALPHA</strong> quality and is provided with a full test suite and QA suite. Developers should be aware of this <strong>PRE-ALPHA</strong> state  if considering using this library for production quality systems at  this time. This library will be Alpha quality imminently (undergoing  rapid development).</p>

<h3>Roadmap</h3>
<ul>
  <li>Imminent release to Beta</li>
  <li>Improve API to allow client created policies to be passed to the RESTful interface</li>
  <li>Improve efficiency of message types</li>
  <li>Implement further type safety</li>
  <li>Investigate option of passing new structured data types via the network.</li>
  <li>Implement manual merge capabilities for structured data</li>
</ul>
<h3>Links</h3>
<ul>
  <li><a href="https://github.com/maidsafe/MaidSafe-Network-Filesystem/wiki" target="_blank">Wiki, including build instructions</a></li>
  <li><a href="https://groups.google.com/forum/?fromgroups#%21forum/maidsafe-development" target="_blank">Developer mailing list</a></li>
  <li><a href="https://github.com/maidsafe/MaidSafe-Network-Filesystem/issues?state=open" target="_blank">Issue tracker</a></li>
  <li><a href="http://dash.maidsafe.net" target="_blank">Build Status</a></li>
</ul>
    </div>

<div class="grid-3 rightnav">
<div class="rightnav-box github">
<a href="https://github.com/maidsafe/MaidSafe-Network-Filesystem/wiki" target="_blank"><!-- content --><p>View on GitHub</p></a>
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