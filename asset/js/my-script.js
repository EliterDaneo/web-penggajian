const flashData = $(".flash-data").data("flashdata");

if (flashData) {
	Swal.fire({
		title: "Selamat",
		text: flashData,
		icon: "success",
	});
}

$(".btn-delete").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");
	Swal.fire({
		title: "Apakah Anda Yakin?",
		text: "Ingin Menghapus Data Ini?",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Hapus Data!",
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});
