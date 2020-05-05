*DATA BASE SETTINGS @POL*
`default settings`
@table
  users

      id int(11)
      username varchar(50)
      password varchar(50)



@table
  guest_register

    firstname varchar(50)
    middlename varchar(50)
    lastname varchar(50)
    email varchar(50)
    date date
    purpose varchar(50)
    idgiven varchar(20)
    contactnum varchar(11)
    guestcode varchar(6)


@table
  user_token

  id int(30) Primary Key Auto Increment
  username varchar(80)
  token varchar(80)

<!-- events -->
@table
  event_list

  eventtitle varchar(50)
  eventcreator varchar(50)
  eventcategory varchar(25)
  eventaudience varchar(25)
  date date
  startat time
  endat time
  venue varchar(25)

@table
  event_participant

  firstname varchar(50)
  middlename varchar(50)
  lastname varchar(50)
  email varchar(50)
  time time
  date date
  idgiven varchar(20)
  contactnum varchar(11)
  guestcode varchar(6)
