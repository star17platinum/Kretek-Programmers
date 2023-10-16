import "package:intl/intl.dart";
import "dart:core"


class CalenderTools {
  static Map getPeriod({DateTime? dateTime}) {
    DateTime now = DateTime.now();
    DateFormat year = DateFormat('yyyy');
    DateFormat month = DateFormat("MM");
    DateFormat labelMonth = DateFormat('MMMM');

    return {
      "label":
          "${labelMonth.format(dateTime ?? now)} ${year.format(dateTime ?? now)}",
      "value": '${year.format(dateTime ?? now)}${month.format(dateTime ?? now)}'
    };
  }

  static Map getFirstLastDay({String? modFormat}) {
    DateTime now = DateTime.now();
    DateTime firstDayOfMonth = DateTime(now.year, now.month, 1);
    DateTime lastDayOfMonth = DateTime(now.year, now.month + 1, 0);

    return {
      "startDate":
          DateFormat(modFormat ?? "yyyy-MM-dd").format(firstDayOfMonth),
      "endDate": DateFormat(modFormat ?? "yyyy-MM-dd").format(lastDayOfMonth)
    };
  }
}
