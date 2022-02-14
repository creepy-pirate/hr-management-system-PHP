const Plugins = [
  // AdminLTE Dist
  {
    from: 'dist/css/',
    to  : 'docs/assets/css/'
  },
  {
    from: 'dist/js/',
    to  : 'docs/assets/js/'
  },
  // jQuery
  {
    from: 'node_modules/jquery/dist/',
    to  : 'docs/assets/../Admin_Dashboard/plugins/jquery/'
  },
  // Popper
  {
    from: 'node_modules/popper.js/dist/',
    to  : 'docs/assets/../Admin_Dashboard/plugins/popper/'
  },
  // Bootstrap
  {
    from: 'node_modules/bootstrap/dist/js/',
    to  : 'docs/assets/../Admin_Dashboard/plugins/bootstrap/js/'
  },
  // Font Awesome
  {
    from: 'node_modules/@fortawesome/fontawesome-free/css/',
    to  : 'docs/assets/../Admin_Dashboard/plugins/fontawesome-free/css/'
  },
  {
    from: 'node_modules/@fortawesome/fontawesome-free/webfonts/',
    to  : 'docs/assets/../Admin_Dashboard/plugins/fontawesome-free/webfonts/'
  },
  // overlayScrollbars
  {
    from: 'node_modules/overlayscrollbars/js/',
    to  : 'docs/assets/../Admin_Dashboard/plugins/overlayScrollbars/js/'
  },
  {
    from: 'node_modules/overlayscrollbars/css/',
    to  : 'docs/assets/../Admin_Dashboard/plugins/overlayScrollbars/css/'
  }
]

module.exports = Plugins
