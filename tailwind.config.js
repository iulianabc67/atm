const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans]
            },

            backgroundImage: theme => ({
                'hero-image': "url('/images/atm-front.jpg')",
            }),

            colors: {
                "burgundy": "#500b2c",
                "cream-colored": "#c39720",
                "welcome-colour": "#43D6BA",
                "welcome-contrast": "#7fffec",
            },

            height: {
                "40vh": "40vh",
                "90vh": "90vh"
            }
            
        },

        
    },

    variants: {
        extend: {
            opacity: ["disabled"]
        }
    },

    plugins: [require("@tailwindcss/forms")]
};
