------

## **POST & PM INLINE ATTACHMENTS v6.15**

[**By Dougiefresh**](http://www.simplemachines.org/community/index.php?action=profile;u=253913) -> [Link to Mod](http://custom.simplemachines.org/mods/index.php?mod=3770)

------

## Introduction
This mod adds the ability to position your attachments in either your forum post or your personal message post using [attachment=n][/attachment] BBCode (where **n** is the number of the attachment in the post, eg first = 0, second = 1).

**NOTICE:** In order to support inline attachments in personal messages (PMs) you are **required** to have the [PM Attachments](https://custom.simplemachines.org/mods/index.php?mod=1974) mod **version 2.6 or later** installed **prior** to this installation of this mod!!

## New BBCodes
This mod supports 5 new BBCodes in order to position your attachments inline:

- **attachment** => Show full expanded picture
- **attach** => Show thumbnail, expandable to full picture
- **attachthumb** => Show thumbnail ONLY, not expandable
- **attachmini** => Show thumbnail, expandable to full picture
- **attachurl** => Shows attachment size, iamge dimensions, and download count; no picture

## BBCodes Parameters
Each new BBCode accepts the following formats:

- [attach=[/nobbc]**{id}**]
- [attach=[/nobbc]**{id}**,**{width}**][/attach]
- [attach=[/nobbc]**{id}**,**{width}**,**{height}**][/attach]

In each case, **{id}** is the attachment number relative to the topic, **{width}** is the max desired width, **{height}** is the max desired height, **{pixels}** is the number of pixels surrounding the image, and **{float}** can be either **left**, **right**, or **center**.  All text between the opening and closing attachment tags is discarded.

### Version 2.0+ BBCode Parameters

Version 2.0+ introduced a new format that allows the following parameters:

- [attachment id=**{id}** {parameter}={value}][/attachment]

Where Allowed parameters:

- **{attachment id}** => ID number of the attachment to show inline (NOT attachment number!)[/td][/tr]
- **width={width}** => Desired width of image to show.  Valid: positive integers.
- **height={height}** => Desired height of image to show.  Valid: positive integers.
- **float={float}** => Floats image to relation to everything else.  Valid: left, right, center
- **margin={pixels}** => Margin around inline attachment.  Valid: positive integers
- **margin-left={pixels}** => Left margin around inline attachment.  Valid: positive integers
- **margin-right={pixels}** => Right margin around inline attachment.  Valid: positive integers
- **margin-top={pixels}** => Top margin around inline attachment.  Valid: positive integers
- **margin-bottom={pixels}** => Bottom margin around inline attachment.  Valid: positive integers
- **border-style={style}** => Border style.  Valid: none, dotted, dashed, solid, double, groove, ridge, inset, outset
- **border-width={pixels}** => Border width around inline attachment.  Valid: positive integers
- **border-color={color}** => Border color.  Valid formats: plain text, #xxx, #xxxxxx, rbg(d,d,d)
- **scale={answer}** => Override scaling of image.  Valid: true, false, yes, no
- **msg={msg ID}** => Message ID number.  Valid: positive integers.[/td][/tr]

In each case, **{id}** is the attachment number relative to the topic, **{width}** is the max desired width, **{height}** is the max desired height, **{pixels}** is the number of pixels surrounding the image, and **{float}** can be either **left**, **right**, or **center**.  All text between the opening and closing attachment tags is discarded.

### Version 3.0+ BBCode Format
**Version 3.0** makes further changes and allows the use of the inline attachments BBCodes **WITHOUT** closing brackets, as well as using attachments from another post!

**Version 3.11** makes further changes and allows the use of closed tags, like **[nobbc][attach][/nobbc]**.  This new form is autonumbered!  Note that the **[nobbc][attach][/nobbc]** tag is processed first, then **[nobbc][attachment][/nobbc]**, then **[nobbc][attachmini][/nobbc]**, then **[nobbc][attachthumb][/nobbc]**, then **[nobbc][attachurl][/nobbc]**.

## Other Mod Features

- Error Text strings are shown for invalid/missing/deleted attachments.
- Inline attachment processes takes place in the **parse_bbc** function, which means any parsing requests can benefit from this mod!
- Text string is shown as alternative in code
- Adds [Insert Attachment x] next to each attachment/upload box to insert the BBCode.
- Attachments used by the inline attachments mod can be omitted from the attachment display at the bottom of the post
- Reloads the attachments for Ajax Editing.
- Removing an attachment removes the attachment BBCode for that attachment & changes remaining attachment tags to ensure proper post appearance.
- Text between inline attachment brackets are removed (as of version 3.0).
- Automatic modification of boilerplates that use the ILA tags within them when changing "1-based" numbering option.

## Admin Settings
The BBCode may be disabled by going to ***Admin* -> *Forums* -> *Posts and Topics* -> *Bulletin Board Code*** and unchecking the **attachment** BBCode.

On the ***Admin* -> *Layout* -> *Attachments and Avatars* -> *Inline Attachments*** page, there are several new options:

- Remove attachment image under post after in-post use.
- Use "One based numbering" for attachment IDs (first attachment is 1 instead of 0).
- Allow quoted attachment images from another post.
- Show download link and counter under inline attachment, like non-inline attachments.
- Turn off "nosniff" option for IE and Chrome browsers.
- Whether "attach" tag is the same as the "attachment" tag.
- Allow playing inline attachments that are videos.
- Use Highslide effects for inline attachments. (only if supported Highslide mod is installed)
- Show EXIF information (only if [EXIF](http://custom.simplemachines.org/mods/index.php?mod=169) mod is installed)

## Compatibility Notes
This mod was tested on SMF 2.0.13, but should work on SMF 2.0 and up.  SMF 2.1 Beta 1, SMF 2.1 Beta 2, and SMF 1.x will not be supported.

SMF 2.1 Beta 3 is NOT currently supported.

These mods can be installed at any time (not required):

- [JQLightBox](http://custom.simplemachines.org/mods/index.php?mod=1605)
- [SCEditor4Smf](http://custom.simplemachines.org/mods/index.php?mod=3594)
- [EXIF](http://custom.simplemachines.org/mods/index.php?mod=169)
- [Boilerplates for Posts](http://custom.simplemachines.org/mods/index.php?mod=2233)

These mods should be installed before this mod (not required):
- [Highslide Image Viewer](http://custom.simplemachines.org/mods/index.php?mod=1450)
- [HS4SMF v0.8.1](https://github.com/Spuds/SMF-HS4SMF)
- [PM Attachments](http://custom.simplemachines.org/mods/index.php?mod=1974)
- [Custom View of Attachments](https://dragomano.ru/mods/custom-view-of-attachments)
- [New Hooks](https://www.simplemachines.org/community/index.php?topic=418177.msg3499865#msg3499865) (Required for [Custom View of Attachments](https://dragomano.ru/mods/custom-view-of-attachments))

## Changelog
The changelog can be viewed at [XPtsp.com](http://www.xptsp.com/board/free-modifications/post-and-pm-inline-attachments/?tab=1).

## License
Copyright (c) 2013 - 2018, Douglas Orend

All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
