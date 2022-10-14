alert(
  "Hello, welcome to the monthly money management trick" +
    "\n\n warning, this is for Indonesian currency only."
);
let kondisi = true;
while (kondisi) {
  let Money = parseInt(
    prompt("Enter the amount of money you want to calculate !!!")
  );
  let needs = Money * 0.5;
  let saving = Money * 0.2;
  let wants = Money * 0.3;
  alert(
    " With " +
      Money +
      " per month" +
      "\n\n For Needs = " +
      needs +
      "\n For Saving = " +
      saving +
      "\n For Wants = " +
      wants
  );
  kondisi = confirm("want to count again ?");
}
alert("Thank you.");
