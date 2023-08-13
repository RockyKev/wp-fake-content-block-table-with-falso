import { incrementalNumber, randAvatar, randFullName, randJobTitle, randState, randTimeZone, randBetweenDate } from '@ngneat/falso';
import fs from 'fs';

// generate payload

let fullPayload = [];
let totalUsersToCreate = 2;

const companyIDFactory = incrementalNumber({ from: 100, step: 1 });
const chatIDFactory = incrementalNumber({ from: 1000, step: 1 });

while (totalUsersToCreate) {

    let user = {
        company_id: `${companyIDFactory()}_bb`,
        fullname: randFullName(),
        role: randJobTitle(),
        location: randState(),
        timezone: randTimeZone(),
        startdate: randBetweenDate({ from: new Date('01/01/2015'), to: new Date('01/01/2022') }).toString(),
        department: '',
        team: '',
        subordinates: '',
        payroll: {
            payroll_id: '',

        },
        chat: {
            chat_id: chatIDFactory(),
            alias: '',
            chatname: '',
            dm_uri: '',
            avatar: randAvatar(),             
        }

    }

    // add their email
    const emailPart = user['fullname'].replace(/\s/g, '').toLowerCase();
    user['email'] = `${emailPart}@test.com`


    // push it into the payload
    fullPayload.push(user);

    // subtract
    totalUsersToCreate--;
}





// make a json file
// const myObject = {
//     name: 'John Dope',
//     age: 31,
//     city: 'San Diego'
// };


const data = JSON.stringify(fullPayload, null, 4);
const filename = "fake-payload";

try {
    fs.writeFileSync(`./fake-data/${filename}.json`, data, {
        flag: 'w'
    });
    console.log(`Written to ${filename}.json successfully`);
} catch (error) {
    console.log(`Error writing to  ${filename}.json: ${error}`)
}
