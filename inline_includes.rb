#! /usr/bin/env ruby

header = File.read('./include/header.html')
footer = File.read('./include/footer.html')

Dir.glob('*.html') do |item|
  next if item == '.' or item == '..'
  puts "Processing #{item}..."
  skipping = false
  out = ""
  File.open(item, 'r') do |f|
    f.each_line do |line|
      if line.include? "<!--header-->" then
        out << line
        skipping = true
      elsif line.include? "<!--end header-->"
        out << header
        skipping = false
      elsif line.include? "<!--footer-->" then
        out << line
        skipping = true
      elsif line.include? "<!--end footer-->"
        out << footer
        skipping = false
      end
      
      if not skipping
        out << line
      end
      
    end 
  end
  
  File.open(item, 'w') { |file| file.write(out) }
  
end