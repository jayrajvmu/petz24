function showPackage(packageName) {
    // Hide all packages
    document.getElementById('basic').style.display = 'none';
    document.getElementById('full').style.display = 'none';

    // Remove active class from all tabs
    var tabs = document.getElementsByClassName('tab-link');
    for (var i = 0; i < tabs.length; i++) {
      tabs[i].classList.remove('active');
    }

    // Show selected package and add active class to the clicked tab
    document.getElementById(packageName).style.display = 'flex';
    event.target.classList.add('active');
  }