$(".tampilModalUbah").on("click", function () {
  $("#formModalLabel").html("Ubah Data Mahasiswa");
  $(".modal-footer button[type=submit]").html("Ubah Data");
  $(".modal-body form").attr(
    "action",
    "http://localhost/wpu-baphp/mvc/public/mahasiswa/ubah"
  );

  const id = $(this).data("id");

  $.ajax({
    url: "http://localhost/wpu-baphp/mvc/public/mahasiswa/getubah",
    data: { id: id },
    method: "post",
    dataType: "json",
    success: function (data) {
      if (data) {
        $("#nama").val(data.nama);
        $("#nrp").val(data.nrp);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      } else {
        console.error("Data tidak ditemukan!");
      }
    },
    error: function (xhr, status, error) {
      console.error("Error:", error);
    },
  });
});
