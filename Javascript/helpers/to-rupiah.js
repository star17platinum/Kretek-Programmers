const toRupiah = (int) => {
  return new Intl.NumberFormat("id-ID", {
    style: "currency",
    currency: "IDR",
    minimunFractionDigits: 0,
  }).format(int);
};
