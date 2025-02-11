## Requirements

Behind the scenes this package leverages [pdftotext](https://en.wikipedia.org/wiki/Pdftotext). You can verify if the binary installed on your system by issueing this command:

```bash
which pdftotext
```

If it is installed it will return the path to the binary.

To install the binary you can use this command on Ubuntu or Debian:

```bash
apt-get install poppler-utils
```

On a mac you can install the binary using brew

```bash
brew install poppler
```

If you're on RedHat, CentOS, Rocky Linux or Fedora use this:

```bash
yum install poppler-utils
```

Sample results for Elitech data logger

```bash
{
  "device_code": "RC-5+",
  "serial_number": "EFI241107334",
  "mode_code": "TLC30A08B",
  "data_point": 712,
  "data": [
    {
      "timestamp": 1739302069,
      "date": "2025-02-11",
      "time": "19:27:49",
      "temp": "30.8"
    },
    {
      "timestamp": 1739302079,
      "date": "2025-02-11",
      "time": "19:27:59",
      "temp": "30.8"
    },
    {
      "timestamp": 1739302089,
      "date": "2025-02-11",
      "time": "19:28:09",
      "temp": "30.8"
    },
    {
      "timestamp": 1739302099,
      "date": "2025-02-11",
      "time": "19:28:19",
      "temp": "30.8"
    }
  ]
}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.