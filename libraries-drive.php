<?php $title="Virtual Drive, MaidSafe Drive"; ?>
<?php $metakeywords="Virtual Drive, MaidSafe Drive"; ?>
<?php $metadescription="A cross platform virtual drive with an easy to use API."; ?>
<?php include('includes/header.php'); ?>
<body id="libraries">
<div id="container">
    <div id="main">
<?php include('includes/nav.php'); ?>
<div class="container-12">
    <div class="grid-9 main-content">
    <h1>MaidSafe-Drive</h1>
<h2>MaidSafe Network Filesystem Library</h2>


<h3>Description</h3>
<p>A cross platform virtual drive with an easy to use API. Uses <a href="http://fuse.sourceforge.net/" target="_blank">Fuse</a> for Linux systems, <a href="http://osxfuse.github.io/" target="_blank">OSXFuse</a> for OSX and Eldos' <a href="https://www.eldos.com/cbfs/" target="_blank">Callback File System</a> for Windows.</p>
<h3>Features</h3>
<ul>
  <li>Create directory containers for virtual filesystems</li>
  <li>Allow native access to virtual files and directories</li>
  <li>Directory versioning capabilities</li>
  <li>Handles user-created data types</li>
  <li>Links to <a href="http://www.maidsafe.net/libraries-encrypt.html">Maidsafe-Encrypt</a> for encrypted data storage</li>
</ul>
<h3>Programming languages</h3>
<h3>Core</h3>
<p>C++11 compatible with GCC (4.7 and above), Clang (3.3 and above) and  MSVC 2012 (with no dependency on CTP releases). Tested on Windows 32/64  bit, Linux 32/64 bit (dependent on GCC version) and OSX (Mountain Lion  and above).</p>
<h3>Status</h3>
<p>This library is considered <strong>BETA</strong> quality and  is provided with a full test suite and QA suite. This can be considered  for use in production quality systems at this time.</p>

<h3>Roadmap</h3>
<ul>
  <li>Consideration for linking (hard/soft) to be added to API</li>
  <li>Make API agnostic to Data Store</li>
  <li>Allow re-rooting of directories if machine MAX directory length exceeded</li>
  <li>Refactor for generic programming</li>
  <li>Refactor for type safety</li>
  <li>Refactor for exception safety</li>
  <li>Consider an API that allows application API as well as disk (Posix) API (drive-demo command line)</li>
  <li>Implement read ahead</li>
</ul>
<h3>Links</h3>
<ul>
  <li><a href="https://github.com/maidsafe/MaidSafe-Drive/wiki" target="_blank">Wiki, including build instructions</a></li>
  <li><a href="https://groups.google.com/forum/?fromgroups#%21forum/maidsafe-development" target="_blank">Developer mailing list</a></li>
  <li><a href="https://github.com/maidsafe/MaidSafe-Drive/issues?state=open" target="_blank">Issue tracker</a></li>
  <li><a href="http://dash.maidsafe.net" target="_blank">Build Status</a></li>
</ul>
    </div>

<div class="grid-3 rightnav">
<div class="rightnav-box github">
<a href="https://github.com/maidsafe/MaidSafe-Drive/wiki" target="_blank"><!-- content --><p>View on GitHub</p></a>
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