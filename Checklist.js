const checkboxForm = document.getElementById('checkboxForm');
const checkboxList = document.getElementById('checkboxList');
const addItemBtn = document.getElementById('addItemBtn');
const removeItemBtn = document.getElementById('removeItemBtn');
const listItems = document.getElementById('listItems');

addItemBtn.addEventListener('click', addItem);
removeItemBtn.addEventListener('click', removeItem);

function addItem() {
  const checkedItems = checkboxForm.querySelectorAll('input[type="checkbox"]:checked');

  checkedItems.forEach((item) => {
    const newItem = document.createElement('li');
    newItem.textContent = item.value;
    listItems.appendChild(newItem);
  });
}

function removeItem() {
  const checkedItems = checkboxForm.querySelectorAll('input[type="checkbox"]:checked');

  checkedItems.forEach((item) => {
    const value = item.value;
    const itemsToRemove = listItems.querySelectorAll('li');

    itemsToRemove.forEach((li) => {
      if (li.textContent === value) {
        li.remove();
      }
    });
  });
}
