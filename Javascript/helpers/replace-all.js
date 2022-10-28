/**
 * @function String.replaceAll()
 * sometimes not working in mobile devices,
 * so instead can try this way.
 */

const replaceAll = (text, replaceFrom, replaceAfter) => {
  const regex = new RegExp(replaceFrom, "g");
  const results = text?.replace(regex, replaceAfter);

  return results;
};
