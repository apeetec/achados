  document.addEventListener('DOMContentLoaded', function() {
    // Parallax
    const parallax = document.querySelectorAll('.parallax');
    const instances = M.Parallax.init(parallax, {
      // specify options here
    });
    const tabs = document.querySelectorAll('.tabs');
    console.log(tabs);
    const instance = M.Tabs.init(tabs, {
      swipeable:true,
    });
  });