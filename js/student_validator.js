
$('document').ready(function()
{
        //customized methods
    jQuery.validator.addMethod("validEmail", function (value, element) {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value)) {
            return true;
        } else {
            return false;
        };
    }, "Enter a valid email address!");

    jQuery.validator.addMethod("phoneUS", function (phone_number, element) {
        phone_number = phone_number.replace(/\s+/g, "");
        return this.optional(element) || phone_number.length > 9 &&
                phone_number.match(/^\+[0-9]{12}$/);
    }, "Specify a valid phone number!");


           //SECTION B: UPDATE personal DETAILS .
    $("#students").validate({
        rules:{
        gender:   {
              required: true,

            },

            fname:{
                required:true,
                lettersonly: true,

            },
            lname:{
                required:true,
                lettersonly: true,

            },

            lname:{
                required:true,
                lettersonly: true,

            },
            phone:{
                required:true,
                phoneUS: true

            },
            residence:   {
              required: true,

            },
            school:   {
              required: true,

            },
            department:   {
              required: true,

            },
            program:   {
              required: true,

            },
            regno:   {
              required: true,

            },
            email:{
                required:true,
                email:true,
                validEmail:true
                },
            password:   {
                required: true

            }


        },

        messages:
        { gender:{
                   required: "Provide Student gender!",
            },

            regno:{
                   required: "Provide Registrattion Number!",

            },
            password:{
            required: "Password required!"

        },
            fname:{
               required: "Please provide student First name!",
                lettersonly: "Name should contains letters only!"
           },

           lname:{
               required: "Please provide student Last name!",
                lettersonly: "Name should contains letters only!"
           },
           lname:{
               required: "Please provide student last name!",
                lettersonly: "Name should contains letters only!"
           },
            residence:   {
                required: "Please provide student residence!",

            },
            school:   {
                required: "Student must belong to a school!",

            },
            department:   {
                required: "Student must belong to a department!",

            },
             program:   {
                required: "Student must enroll a program!",

            },
             email:{
                required:"Enter student email address!",
                email:"Enter a valid email address!"
            },
            phone: "Provide Studentcontact. Start with +254xxxxxxx",


     },
    });


     //ADD CANDIDATE
    $("#candidates").validate({
        rules:{
             registration:{
                   required:true,

            },

            position:{
                required:true,
            },

            posts:{
                required:true,
            },
            passport:    {
                 required:true,
            },

        },
        messages:{
            posts: "Provide the Post",
            position: "Provide position!",
            passport: "Please Provide The Candidate's Passport!",
            registration:{
                   required: "Provide Registrattion Number!",

            },
        }
    });

    //Update university details

    $("#university").validate({
        rules:{
            campus:{
                required:true
            },

            phone:{
                required:true,
                phoneUS: true

            },

            coname:{
                required:true
            },
             inst_mail:{
                required:true

            },
             id:{
                required: true
             },
        },
        messages:{
           campus: "Select Institution",
            phone: "Provide co-codinator contact. Start with +254xxxxxxx",
            coname: "Provide co-ordinator's name!",
            inst_mail: "Provide a valid Email",
            id: "Please provide the accepted format for ID",

        },
    });
            //update attachment details validation
        $("#attachment").validate({
        rules:{
            attachtype:{
                required:true
            },

            level:{
                required:true,


            },

            sdate:{
                required:true
            },


        },
        messages:{
           attachtype: "Select Attachment type",
            level: "Select Level",
            sdate: "Provide start date!",


        },
    });
});

