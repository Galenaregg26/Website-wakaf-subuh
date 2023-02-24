const flashData = $('.flash-data').data('flashdata');

if (flashData) {
  Swal.fire({
    title: flashData,
    width: 600,
    padding: '3em',
    color: '#716add',
    background: '#fff url(../img/trees.png)',
    backdrop: `
      rgba(0,0,123,0.4)
      url("../img/nyan-cat.gif")
      left top
      no-repeat
    `,
  });
}
