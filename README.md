﻿# CloudflareMigrationTool

# Video Migration Tool: Cloudflare to Huawei Cloud VOD

This automated tool facilitates the migration of videos from Cloudflare to Huawei Cloud Video on Demand platform. It manages the transfer process through multiple steps, ensuring a smooth migration of your video assets.

## Features

- **Credentials Management**: Securely manage and input your Cloudflare and Huawei Cloud credentials.
- **Video Link Fetching**: Retrieve video links from Cloudflare for migration.
- **Video Preparation**: Prepare Cloudflare video files and credentials for migration.
- **Video Uploading**: Upload videos from Cloudflare directly to Huawei Cloud VOD.
- **Database Updates**: Update your database links from Cloudflare to Huawei Cloud VOD links.

## Prerequisites

- NodeJS installed on your system.
- nginx to run PHP commands
- Access to Cloudflare and Huawei Cloud accounts with necessary permissions.

## Usage

### Step 1: Input Credentials

Input your Cloudflare credentials to start the migration process. Navigate to the `Requirements Step` section on the tool's homepage.

### Step 2: Fetch Video Links

Use the fetched Cloudflare video links or skip this step if you have the links ready. Click on `Get Links` to fetch video links.

### Step 3: Prepare for Migration

Run the following commands in your terminal after adding your credentials to `index.js`:

```bash
npm i
node index.js
```

This will generate an Excel sheet with video details.

### Step 4: Upload to Huawei Cloud

After preparing video links, upload them through the Huawei Cloud VOD's 'Upload from URL' section.

### Step 5: Database Update

Finally, update your database with new video links pointing to Huawei Cloud VOD, ensuring all references in your applications are updated.

## Installation

Clone the repository and navigate to the tool's directory:

```bash
git clone [repository-url]
cd [repository-directory]
```

Install required dependencies:

```bash
npm install
```

## Contributing

Contributions are welcome! Please fork the repository and submit pull requests with your enhancements.

## License

This project is licensed under the MIT License - see the LICENSE file for details.
