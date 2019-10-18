<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
<style>
    html,
        body {
            margin: 0 !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            color: #3b3b3b;
            font-family: 'Open Sans', sans-serif;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
        a {
            text-decoration: none;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        a[x-apple-data-detectors],  /* iOS */
        .unstyle-auto-detected-links a,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        /* What it does: Prevents Gmail from changing the text color in conversation threads. */
        .im {
            color: #3b3b3b !important;
        }

        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img + div {
            display: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */

        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u ~ div .email-container {
                min-width: 320px !important;
            }
        }
        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u ~ div .email-container {
                min-width: 375px !important;
            }
        }
        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            u ~ div .email-container {
                min-width: 414px !important;
            }
        }
    /* What it does: Hover styles for buttons */
	    .button-td,
	    .button-a {
	        transition: all 100ms ease-in;
	    }

	    .button-td-primary:hover,
	    .button-a-primary:hover {
	        background: #555555 !important;
	        border-color: #555555 !important;
	    }

	    /* Media Queries */
	    @media screen and (max-width: 600px) {

	        /* What it does: Adjust typography on small screens to improve readability */
	        .email-container p {
	            font-size: 17px !important;
	        }

	    }
</style>
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f3f3f3;">
	<center style="width: 100%; background-color: #f3f3f3;">

        <!-- Visually Hidden Preheader Text : BEGIN -->
        <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
            (Optional) This text will appear in the inbox preview, but not the email body. It can be used to supplement the email subject line or even summarize the email's contents. Extended text preheaders (~490 characters) seems like a better UX for anyone using a screenreader or voice-command apps like Siri to dictate the contents of an email. If this text is not included, email clients will automatically populate it using the text (including image alt text) at the start of the email's body.
        </div>
        <!-- Visually Hidden Preheader Text : END -->

        <!-- Preview Text Spacing Hack : BEGIN -->
        <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
	        &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <!-- Preview Text Spacing Hack : END -->
        <div style="max-width: 600px; margin: 0 auto;" class="email-container">

	        <!-- Email Body : BEGIN -->
	        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">

                <!-- Hero Image, Flush : BEGIN -->
                <tr>
                    <td style="background-color: #ffffff;">
                        <img src="https://i.ibb.co/pRRDmPq/62111584-206391597006318-693170555098686604-n.jpg" alt="62111584-206391597006318-693170555098686604-n" border="0" width="600" height="400" alt="alt_text" border="0" style="width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555; margin: auto; display: block;" class="g-img">
                    </td>
                </tr>
                <!-- Hero Image, Flush : END -->

                <!-- 1 Column Text + Button : BEGIN -->
                <tr>
                    <td style="background-color: #ffffff;">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td style="padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                                    <h1 style="margin: 0 0 10px 0; font-family: sans-serif; font-size: 25px; line-height: 30px; color: #333333; font-weight: normal;">
                                        Uncle Jo Workshop
                                    </h1>
                                    <h3 style="margin: 0;padding:5px;color: #555555;"">
                                        Halo {{ $nama }}, Anda sudah terdaftar di Workshop bersama Uncle Jo.
                                    </h3>
                                    <p style="color: #3b3b3b;">
                                        Harga Workshop sebesar :<b>Rp. 350.000,00</b>
                                    </p>
                                    <p style="color: red">
                                        <i>*Workshop akan diselenggarakan pada tanggal {{\Carbon\Carbon::parse($tgl)->formatLocalized('%d %B %Y')}}</i>
                                    </p>
                                    <p style="margin: 0;padding-bottom:5px;color: #555555;"">
                                        Silahkan transfer uang sebesar nominal diatas kepada rekening:
                                    </p>
                                    &nbsp;
                                    <div style="border: 1px #3b3b3b solid; padding: 10px 10px; text-align: center; width: auto;color: #555555;"">
                                        <h2 style="color: #3b3b3b;">BCA 124234 234234 23423 343 a/n Agam Muhmunt</h2>
                                    </div>
                                    <div style="width: auto; padding: 15px 10px 15px 10px; text-align: center;">
                                        <p>
                                            <i>Keterangan Transfer: </i>
                                            <b>
                                                BWAFWDEVG< spasi >NamaAnda
                                             </b>
                                        </p>
                                    </div>
                                    <p style="color: #3b3b3b;">
                                        Setelah Transfer silahkan konfirmasi foto pembayaran dan berikan data diri berupa:
                                    </p>
                                    <ul style="color: #3b3b3b;">
                                        <li style="list-style-circle: circle; color:#3b3b3b;">Nama Lengkap</li>
                                        <li style="list-style-circle: circle; color:#3b3b3b;">Email(@gmail)</li>
                                        <li style="list-style-circle: circle; color:#3b3b3b;">Foto Bukti Transfer</li>
                                    </ul>
                                    <p style="color: #3b3b3b;">
                                        Kirim data di atas kepada WhatsApp <b>08983231096</b> dengan cara menekan tombol di bawah
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 20px;">
                                    <!-- Button : BEGIN -->
                                    <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin: auto; padding-bottom: 50px;">
                                        <tr>

                                            <td class="button-td button-td-primary">
											     <a class="button-a button-a-primary" href=" https://wa.me/6282217376369?text=Halo%20Admin,%20Saya%20ingin%20mengirim%20bukti%20transfer%20untuk%20Workshop%20hari%20ini" style="background: #8E2DE2;
                                                 background: -webkit-linear-gradient(to right, #24c6dc, #29ffc6);
                                                 background: linear-gradient(to right, #24c6dc, #29ffc6);
                                                 border: none;
                                                 font-family: sans-serif;
                                                 font-size: 15px;
                                                 line-height: 15px;
                                                 text-decoration: none;
                                                 padding: 13px 17px;
                                                 color: #ffffff;
                                                 display: block;
                                                 border-radius: 5px;">Whatsapp</a>
											</td>
                                        </tr>
                                    </table>
                                    <!-- Button : END -->
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>
                <!-- 1 Column Text + Button : END -->

            </table>
            <!-- Email Body : END -->

            <!-- Email Footer : BEGIN -->
	        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                <tr>
                    <td style="padding: 20px; font-family: sans-serif; font-size: 12px; line-height: 15px; text-align: center; color: #3b3b3b;">
                        <webversion style="color: #3b3b3b; text-decoration: underline; font-weight: bold;">View as a Web Page</webversion>
                        <br><br>
						Company Name<br><span class="unstyle-auto-detected-links">123 Fake Street, SpringField, OR, 97477 US<br>(123) 456-7890</span>
                        <br><br>
                        <unsubscribe style="color: #3b3b3b; text-decoration: underline;">unsubscribe</unsubscribe>
                    </td>
                </tr>
            </table>
            <!-- Email Footer : END -->

        </div>
        <!-- Full Bleed Background Section : END -->
    </center>
</body>
</html>
