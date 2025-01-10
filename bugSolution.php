function myFunction() {
  // Some code here
  if (someCondition) {
    return;
  }
  // Explicit return statement to avoid implicit return on empty block
  return; // or any desired return value
  // More code that should only execute if someCondition is false
}