$(".btn-load").on("click", function () {
	Swal.fire({
		title: "Mengalihkan...",
		text: "Membawamu terbang ke awan",
		showLoaderOnConfirm: true,
		showConfirmButton: false,
		showCloseButton: false,
		showCancelButton: false,
		allowOutsideClick: false,
		allowEscapeKey: false,
		onOpen: () => {
			swal.showLoading();
		},
	});
	return true;
});

$(".my-form").submit(function () {
	Swal.fire({
		title: "Memuat",
		text: "Mengirim data formulir",
		showLoaderOnConfirm: true,
		showConfirmButton: false,
		showCloseButton: false,
		showCancelButton: false,
		allowOutsideClick: false,
		allowEscapeKey: false,
		onOpen: () => {
			swal.showLoading();
		},
	});
	return true;
});

$(function () {
	$(".select2").select2();
});
