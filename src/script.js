console.log("here i go!");

async function getFakeData() {
  const file = `fake-data/fake-payload.json`;
  console.log("getting: " + file);

  try {
    // https://stackoverflow.com/a/70602109/4096078
    const response = await import(`/wp-content/plugins/fake-content-block/${file}`, { assert: { type: "json" } });

    console.log(response["default"]);
    return response;
  } catch (err) {
    console.log(err);
    return err;
  }
}

// TODO: Set up conditional where it gets real data vs fake data
getFakeData();
