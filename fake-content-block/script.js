function generateTable(payload, tbody) {
  const tableData = payload
    .map((key) => {
      return `<tr>
      <td class="whitespace-nowrap px-6 py-4"><img src="${key.chat.avatar}"></td>
      <td class="whitespace-nowrap px-6 py-4 font-medium">${key.company_id}</td>
      <td class="whitespace-nowrap px-6 py-4">${key.fullname} (${key.chat.pronoun})</td>
      <td class="whitespace-nowrap px-6 py-4">${key.location}</td>
      <td class="whitespace-nowrap px-6 py-4">${key.role}</td>
      <td class="whitespace-nowrap px-6 py-4 flex items-center h-20 min-h-full">
        <a href="mailto:${key.email}"><div class="icon-email h-4 w-4"></div></a>
        <a href="${key.chat.dm_uri}"><div class="icon-chat h-4 w-4"></div></a>
        <a href="${key.profile_uri}"><div class="icon-info h-4 w-4"></div></a>      
      </td>
      </tr>`;
    })
    .join("");

  tbody.innerHTML = tableData;
}

async function getFakeData() {
  const file = `fake-data/fake-payload.json`;
  console.log("getting: " + file);

  try {
    // https://stackoverflow.com/a/70602109/4096078
    const response = await import(`/wp-content/plugins/fake-content-block/${file}`, { assert: { type: "json" } });

    // generate table
    generateTable(response["default"], tableBody);

    return response;
  } catch (err) {
    console.log(err);
    return err;
  }
}

const tableButton = document.querySelector("#fill-table");
const tableBody = document.querySelector("#fake-content-table tbody");

tableButton.addEventListener("click", () => {
  // TODO: Set up conditional where it gets real data vs fake data

  getFakeData();
});
